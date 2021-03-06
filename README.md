[Link to my Restaurant 2.0](https://empanadasrestaurant.000webhostapp.com/index.html)

# [Restaurant 2.0](https://github.com/becodeorg/BXL-Swartz-4-27/blob/master/2.The-Hill/2.PHP/Restaurant2.0PHP.md)

* Type of challenge: learning 
* Duration: 5 days (From November 22h to 26st 2021)
* Team challenge: **solo**

## Learning objectives
At the end of this challenge, depending on what you completed, you should be able to:

* Make a Form and manage messages via an interface
* View and manage a guestbook (I will use a Bookings registry instead)
* Display an image gallery dynamically
* Use an API
* Deploy a project in php

## The mission
Once upon a time you made a website for a restaurant franchise. Now and after hearing about the wonderful work you did the owner is calling you back to implement new features and improve the website.

Sadly, he can only pay you for a week of work, which won’t be enough time to implement all his ideas. Hopefully, he’s ready to make compromises, you have to implement as much as you can in the given time.

## Instructions
* take back your old [project](https://github.com/luisromeroaraya/restaurant-css-framework/README.md)
* implement at least one new feature
* improve the design (if you have time)
* use whatever technology you want

| Note | You don’t have to fill any form for this project, as it’s a learning challenge. However, if you feel it could unlock badges you can try to claim them with it. |
| ---- | ---- |

## Features
### Back office
One of the idea the owner had was to implement a "Back office" to the website. The objective is to receive all the messages from the form on a single page to facilitate the work of marketing and communication. From this interface you can view the messages and delete them.

Something like that:
![Backoffice](https://github.com/becodeorg/BXL-Swartz-4-27/raw/master/2.The-Hill/2.PHP/deletemessage.png)

### Guestbook (Bookings)
The owner would like to have a new [guest book](https://en.wikipedia.org/wiki/Guestbook) page to receive comments, kind words or advice from the customers. However, it ideally need to be made with the google sheet API to allow the owner to check everything directly from his google account.

If you find that it is too early to take an interest in API's you can proceed as for the previous form and use your database.

The form should at least contain:
* customer name
* visited restaurant
* visit date
* comment (optional input)

In my case my Bookings form will have:
- [x] date
- [x] restaurant
- [x] time
- [x] name
- [x] email
- [x] telephone

**Bonus**
- [x] Use only one page to manage messages and the guestbook

![Guestbook](https://github.com/becodeorg/BXL-Swartz-4-27/raw/master/2.The-Hill/2.PHP/backofficeX2.png)

### Gallery
For the moment the images in your gallery are not dynamic. To add a photo you must add them one by one in your html code. What if I told you "Hey marketing and communications hired a photographer, there are 4000 photos to add to the gallery!"?

The objective is twofold. First create a page to upload images. Secondly create a php script that allows you to display the images (Normally the front of your gallery does not change).

**Bonus**
- [x] Use only one page to manage messages, guestbook and gallery

![Gallery](https://github.com/becodeorg/BXL-Swartz-4-27/raw/master/2.The-Hill/2.PHP/backofficeIMG.png)

### Deploy
This is the opportunity to deploy your project. As you have probably noticed, github does not allow php hosting. There are free solutions. It's up to you to find them and share them with your colleagues!

## Resources
* [composer](https://getcomposer.org/)
* [add composer on a docker image](https://tinyurl.com/yxda5q7o)
* [google sheet API](https://developers.google.com/sheets/api/quickstart/php)
