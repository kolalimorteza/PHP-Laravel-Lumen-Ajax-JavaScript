This project was bootstrapped with HTML, CSS, JavaScript and PHP as well as [Lumen Framework](https://lumen.laravel.com/).


## Design implemenation

Implement a responsive web design solution based on the provided design (mobile & desktop):


* The page should look according to the mobile design when the browser viewport is 320px.
* The page should look according to the desktop design when the browser viewport is at least 940px.
* You decide how the page should behave between the breakpoints 320px-940px.
* The page should be centered in the web browser and top bar and footer backgrounds should be repeatead horizontally, covering the entire width of the browser window.
* The desktop navigation should have two levels of drop-downs. It should be solved without any javascript. Make sure you get the hover states, background and text color changes. 
* The mobile navigation should show all levels and be visible/hidden when you click on the hamburger icon. 

## Cart

The cart drop-down should be visible when you hovering (not click) on the cart on desktop. The cart drop-down should still be visible when you hovering inside of it. 
* The cart drop-down should be visible/hidden when you click on the cart icon. 
* The cart data should be fetch with an Ajax request and be cached for 1 minute. Meaning that no additional requests should be made when you reload the page during this time. The URL returns the data in JSON format.



## Products
The products will be available to you as an array by calling $products variable in /resources/view/index.blade.php. We want you to sort the products alphabetically from A-Z with PHP. No other data than the provided array should be used to present the products, like hard coded markup.


## Subscribe to newsletter

There are three layer compositions that illustrates a newsletter signup interaction.
* Subscribe loading
* Subscribe success
* Subscribe failed


### An Ajax request should be sent to the url newsletter/subscribe to complete the subscription.
* You should create a response back in JSON format if the subscription was succesful or failed. The subscription should be successful if the email is a valid email address. 
* You don't need to save any email address into a database, only validate it. 
* Implement the response in the file app/Http/Controllers/NewsletterController.php and the function subscribe().
