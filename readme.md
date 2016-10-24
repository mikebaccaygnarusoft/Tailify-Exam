Hi this application is for the examination for Tailify.
Setup Guide:
		
		1. Clone or download the repository in your workstation
		
		2. In my case I use xampp for the webserver so I created a folder name tailify_exam in the htdocs and put the cloned repository inside
		
		3. Open cmd and go to the file path of tailify_exam and type composer install
		
		4. After a successful install, create a .env file in the root folder of your laravel together with the .env.example file 
		
		copy the contents inside .env.example file inside .env file but change the following data:
		
		username is 'root' 
		
		and password is ''
		
		type php artisan key:generate on cmd terminal to generate the app key inside the .env file
		
		7. After a successful setup, you can now access the application through localhost/tailify_exam/public
		

I have used angular js for frontend and laravel framework for its backend

MASTER VIEW - resources/views/index.blade

ANGULAR FRONTEND : 

public/angular -- js,css , public/partials -- htmls

LARAVEL CONTROLLERS - app/Http/Controllers

Hoping for your positive feedback and result thank you very much and Godbless :)

