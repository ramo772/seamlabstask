# seamlabstask

# Getting started

## Installation

Clone the repository

    git clone https://github.com/ramo772/seamlabstask.git

Switch to the repo folder

    cd seamlabstask
    
Install all the dependencies 

    composer install


Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve
    
The project divided into two sections Problem solving Section with api start with "{{host}}/api/problemsolving/" and user apis "{{host}}/api/users"

The Requested end points

1. Numbers Without 5

![image](https://user-images.githubusercontent.com/76254252/201423388-ecdd1b45-aa2f-4158-b75b-8bb1ab22fc59.png)

2. Input String

![image](https://user-images.githubusercontent.com/76254252/201423533-2bdfca01-2d13-40cf-857a-dcebc65e92aa.png)

3. Reduce Steps

![image](https://user-images.githubusercontent.com/76254252/201423713-bd41c502-2937-4615-ba46-cc4324e9b8f7.png)

4. Register 

![image](https://user-images.githubusercontent.com/76254252/201423845-c14bb46f-c651-4e92-a5ce-c427d0f60ba8.png)

5. Login

![image](https://user-images.githubusercontent.com/76254252/201423978-10a9f35c-0a6e-43d9-b87c-791d0885e6fa.png)

6. Get User By ID

![image](https://user-images.githubusercontent.com/76254252/201424039-b5c96bea-1684-47c6-a592-2705016ec7e1.png)

7. Destroy User

![image](https://user-images.githubusercontent.com/76254252/201424102-eaf47f84-7e69-41fa-8866-a53df2758094.png)

8. Update User

![image](https://user-images.githubusercontent.com/76254252/201424132-2af10303-5d61-4f1d-9dd5-9029e7bc97ee.png)

9. All Users

![image](https://user-images.githubusercontent.com/76254252/201424166-b7207e8c-380e-47d1-b014-1bc59f4ea3fb.png)


    
You will find the PostMan Collection at the project {{host}} => 127.0.0.1:8000/api

