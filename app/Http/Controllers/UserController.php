<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


use Illuminate\Support\Facades\Auth;
use App\Models\user;

use function PHPUnit\Framework\isEmpty;

class UserController extends Controller
{
    /**
     * Display all the movie favorites in the users account,
     * only users that are logged in can view this page
     *
     */
    public function index() {

        //check if user is logged in
        if(Auth::check()){
        $user = user::findOrFail(Auth::id());

        //get movie ids from db and tokenise long id string into tokens (movie ids)
        $str = $user->favourite_movies;

        //if there is no movie in the favorite redirect them to home
        if (is_null($str) ){
            return redirect('/home')->with('status', 'please add a movie to your favorites!');
        } else {
        

        //tokensaiton of the id string and return movie ids in an array
        // declaring delimiters
        $del = ",";
        //calling strtok() function
        $movie_id = strtok($str, $del);
        while ($movie_id !== false)
        {
            $movie = Http::get("http://www.omdbapi.com/?apikey=bdbfe7ff&i=$movie_id");
            $movies[] = $movie;
            $movie_id = strtok($del);
        } 
        return view('user.index', ['user' => $user,'movies'=>$movies]);
        }
        } else {
            return redirect("/register")->with('status', 'please login or register add movies to your favorites');
        }
    }
    /**
     *Show more information about a particular movie
     *only users that are logged can view this page
     *
     */
    public function show($movie_id){
        //check if user logged in
        $user = user::findOrFail(Auth::id());

        //get movie information from omdb API
        $movie = Http::get("http://www.omdbapi.com/?apikey=bdbfe7ff&i=$movie_id");

        return view('user.show', ['user' => $user, 'movie'=>$movie]);
    }

    /**
     *Method removes the movie from the favourites
     *checks the movie id to remove and 
     *
     */
    public function remove_movie($id, Request $request){

        //remove movie
        $user = user::findOrFail($id);
        $str = $user->favourite_movies;


        $movie_to_remove = $request->input('imdbID');

        //find where the movie id is in the string, and remove it
        //when movie id is in the string
        if (str_contains("$str", "$movie_to_remove")){

            //when movie id is first or on the right
            if(str_contains("$str", "$movie_to_remove".',')){
                $str=  str_replace(("$movie_to_remove".','), '',  $str);
            }
            //when movie id is last 
            else if(str_contains("$str", ','."$movie_to_remove")){
                $str=str_replace(','."$movie_to_remove", '',  $str);
            } 
            //when the string only contains one movie id
            else {
                $str=str_replace("$movie_to_remove", '',  $str);
            }
        }

        
        $user->favourite_movies = $str;
        $user->save();
        return redirect('/favourites')->with('status', 'movie removed form favourites');

    }

    

}
