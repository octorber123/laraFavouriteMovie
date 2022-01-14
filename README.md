# Laravel Favourite Movie
- This is simple Laravel project uses the OMBD movie API, to allow registered users to add movies to their favourites by inputting the IMDB ID of the movie.
## Heroku link 
- Please read the Errors section, before going on the link.
- https://larafavouritemovies.herokuapp.com/

## Setup/Use:
- this application was used in wtih wamp application
- this application was tested on the php artisan server
- please register and add a movie to the account in order to view the favourites
- movies can be removed from favourites from the see detials of each movie
- i have noticed that the env file has been renamed to env.example when pushed to the repo. When cloning please make sure that the env file has the correct ending. i.e .env

## Technologies:
- Framework: Laravel
- Languages : PHP, blade

## Functionality:
#### users can:
- login
- add and remove movies
- do a show more about a movie (see more details of a movie)
- can see all favourites 
- unauthenticated users cannot access user views
#### other functionality
- adequte error reporting , all redirects have status/error messages
- use of layouts
- use of bootstrap to make application responsive
- use of css to make web app simple and minimalistic

## Errors:
#### Heroku
- Heroku app does not work as intended. it seems that the CSFR token or Https may be causing some issues. The error doesnt allow any post requests to be made. this problem doesnt exist when the application is on the php artisan server.
- the css and bootsrap do not seem to work on the heroku app, it can be seen when you go to the register/login pages. i think it may be due to the configuration. I have read that heroku needs to be adjusted to ensure that it is picking information from the correct sources. I am still unsure of this.
#### App
- when you register and there are no favourties on the account and when you click on show favourites, it will redirect you to add movie page. However, if you were to add movies and then remove all of them, then when you go on favourites, an error will be displayed. I believe another check needs to be done to check for an empyty string with spaces. if that is the case the user should be redirected to add movie again

## Struggles
i attemped to fix the heroku app, however i found myself not knowing where to begin, alot of the documentation seems to be very vague and chat room solutions have not worked. As a final resort i have contacted laracasts and join a laravel discord server to hopefully find someone that can help.

## Security concerns
- the add movie form has not been html sanitised to remove potential code injection
- the field has not been type checked to ensure that the ID entered is in the OMDB format - will allow users to add all kinds of inputs potentially breaking the favorites list
- also no character limit has been put in the add movie id input variable - will allow users to add all kinds of inputs potentially breaking the favorites list/ causing an error
