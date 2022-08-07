this program is built with laravel 8 framework.
after installing the library with composer first i make an api route on api.php with "api/converts" address.
then in the HomeController.php write convert() function to get request data from json string and convert them to expected locale.
form validations are handled with laravel and both language/number are required. number must be numeric.
if validation errors are given then outputs filled with happened error.
on the controller if locale was not sent with expected format then cosmopolitan return error. so for example if user send locale something like 'fa' instead of 'fa-IR' try block except an error and then catch block show the error and convert number string with another way.
on the test_api.blade.php file we have only html and js scripts.
when any language selected by user or any number entered, an ajax request was sent with jquery to api location.
the the api result shown on black area. if any error occurred then error shows on output area.
i get the list of all locale and their short code from this stackoverflow answer. and then edited the list and remove the locale only options such 'fa' and keep options with correct format such as 'fa-IR'
for having searchable and sorted list i use select2 library.
when any input given from user, the output area cleared and the result shown here. 
