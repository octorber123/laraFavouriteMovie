
## Setup/Use:
- this application was used in wtih wamp application
- this application was tested on the php artisan server
- please register and add a movie to the account in order to view the favourites

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
#### other functionnality
- adequte error reporting
- use of layouts

## Errors:
- Heroku app does not work as intended. it seems that the CSFR token or Https may be causing some issues. The error doesnt allow any post requests to be made. this problem doesnt exist when the application is on the php artisan server.
- when you register and there are no favourties on the account and when you click on show favourites, it will redirect you to add movie page. However, if you were to add movies and then remove all of them, then when you go on favourites, an error will be displayed. I believe another check needs to be done to check for an empyty string with spaces. if that is the case the user should be redirected to add movie again

## Struggles
i attemped to fix the heroku app, however i found myself not knowing where to begin, alot of the documentation seems to be very vague and chat room solutions have not worked. As a final resort i have contacted laracasts and join a laravel discord server to hopefully find someone that can help.

## Secutrity concerns
- the add movie form had not been html sanitised to remove potential code injection
- the field has not been type checked to ensure that the ID entered is in the OMDB format - will allow users to add all kinds of inputs potentially breaking the favorites list
- also no limit ha been put to the input size of the omdb format - will allow users to add all kinds of inputs potentially breaking the favorites list
