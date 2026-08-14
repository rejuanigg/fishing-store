# Sweet Store
Sweet Store is an ecommerce platform built in Laravel, PHP 8.5 and Vue.js

This platform is an efficient and fast way to be owner of a big ecommerce website.

## Tech Stack
- Laravel
- PHP 8.5
- Vue.js

## Features
- **Ratings**: Users can rate products according to their experience.
- **Roles**: This platform has two roles; client, employed. Each one has different permissions.
- **Orders**: Users can create orders and the employed can process users orders.
- **Stock**: When user create an order, the product selected is subtracted from the database stock.
- **Auth**: This platform hand the auth with Laravel Sanctum

## Endpoints

## API Endpoints

### Auth

| Method | Endpoint        | Description                      |
|--------|-----------------|----------------------------------|
| POST   | `/api/register` | Create a new user                |
| POST   | `/api/login`    | The users can log in             |
| POST   | `/api/logout`   | The users can log out            |
| GET    | `/api/me`       | Get the users data (token, role) |

### Users

| Method | Endpoint                 | Description                                 |
|--------|--------------------------|---------------------------------------------|
| PATCH  | `/api/edit_profile`      | Users can edit their data                   |
| DELETE | `/api/delete_profile`    | Users can delete their account              |
| PATCH  | `/api/password`          | Users can change their password             |
| PATCH  | `/api/users/{user}/role` | Only the **owner** can change the user role |

### Products

| Method    | Endpoint                           | Description                              |
|-----------|------------------------------------|------------------------------------------|
| GET       | `/api/products`                    | Get all the products                     |
| POST      | `/api/products`                    | Add new products                         |
| GET       | `/api/products/featured`           | Get the featured products                |
| GET       | `/api/products/{product}`          | Get product by their id                  |
| PUT/PATCH | `/api/products/{product}`          | Edit the product by searching their id   |
| DELETE    | `/api/products/{product}`          | Delete the product by searching their id |
| PATCH     | `/api/products/{product}/featured` | Update the featured products             |

### Product Ratings (Califications)

| Method    | Endpoint                                               | Description             |
|-----------|--------------------------------------------------------|-------------------------|
| GET       | `/api/products/{product}/califications`                | Get the product's rate  |
| POST      | `/api/products/{product}/califications`                | Create a product's rate |
| PUT/PATCH | `/api/products/{product}/califications/{calification}` | Update product's rate   |
| DELETE    | `/api/products/{product}/califications/{calification}` | Delete product's rate   |

### Categories

| Method    | Endpoint                     | Description            |
|-----------|------------------------------|------------------------|
| GET       | `/api/categories`            | Get all the categories |
| POST      | `/api/categories`            | Create a new category  |
| PUT/PATCH | `/api/categories/{category}` | Update a category      |
| DELETE    | `/api/categories/{category}` | Delete a category      |

### Sections

| Method | Endpoint                        | Description         |
|--------|---------------------------------|---------------------|
| GET | `/api/sections`                 | Get sections        |
| POST | `/api/sections`                 | Create new sections |
| PUT/PATCH | `/api/sections/{section}`       | update sections     |
| DELETE | `/api/sections/{section}`       | Delete sections     |

### Stocks

| Method | Endpoint | Description             |
|--------|----------|-------------------------|
| GET | `/api/stocks` | get the product's stock |
| POST | `/api/stocks` | add a product's stock   |
| PUT/PATCH | `/api/stocks/{stock}` | update product's stock  |
| DELETE | `/api/stocks/{stock}` | delete a product stock  |

### Orders

| Method | Endpoint | Description                                                |
|--------|----------|------------------------------------------------------------|
| GET | `/api/orders` | get all the orders                                         |
| POST | `/api/orders` | create a order                                             |
| GET | `/api/orders/active` | get the orders with a 'in progress' or 'processing' status |
| GET | `/api/orders/historical` | get the orders with a 'completed' or 'canceled' status     |
| GET | `/api/orders/recent` | get the 10th first orders                                  |
| GET | `/api/orders/{order}` | get a specefic order with their id                         |
| PATCH | `/api/orders/{order}` | update only the order status                               |
| PATCH | `/api/orders/{order}/cancel` | cancel a order with their id                               |

### Images

| Method | Endpoint | Description         |
|--------|----------|---------------------|
| GET | `/api/images` | get a product image |
| POST | `/api/images` | create a new image  |
| PUT/PATCH | `/api/images/{image}` | update a image      |
| DELETE | `/api/images/{image}` | delete a image      |






[//]: # (## Home)

[//]: # (<p align="center">)

[//]: # (  <img width="360" alt="Home preview" src="https://github.com/user-attachments/assets/de4ca1e6-cc47-4616-accb-5051df807266" />)

[//]: # (</p>)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Home mobile" src="https://github.com/user-attachments/assets/a426e3d3-8b11-4a0a-8efd-732a1d625f40" />)

[//]: # (</p>)

[//]: # (## Admin Panel)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Admin panel" src="https://github.com/user-attachments/assets/c60fe9a0-8080-4eac-924e-7df24d81a49b" />)

[//]: # (  <img width="240" alt="Admin panel" src="https://github.com/user-attachments/assets/4e9996ad-a07b-48ed-a3e0-28041dc8a77c" />)

[//]: # (  <img width="240" alt="Admin panel" src="https://github.com/user-attachments/assets/b8130100-02d8-471d-a9f0-7c6064efd32f" />)

[//]: # (</p>)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Admin panel" src="https://github.com/user-attachments/assets/b37610d3-9028-472c-9c6b-2ec48845bc9d" />)

[//]: # (  <img width="240" alt="Admin panel" src="https://github.com/user-attachments/assets/3c493f51-04c7-402a-97ae-4a0dc05a8eb8" />)

[//]: # (  <img width="240" alt="Admin panel" src="https://github.com/user-attachments/assets/05397246-3761-46d5-ba78-ead27f45003b" />)

[//]: # (</p>)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Admin panel" src="https://github.com/user-attachments/assets/718f636b-eb9e-45ec-8e98-947e6b73c634" />)

[//]: # (</p>)

[//]: # (## Products)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Products" src="https://github.com/user-attachments/assets/1955401a-1f83-48f7-bca6-7d26fdee2e0f" />)

[//]: # (  <img width="240" alt="Products" src="https://github.com/user-attachments/assets/1a45f90a-7ae2-4920-87a2-3e348520e06d" />)

[//]: # (  <img width="240" alt="Products" src="https://github.com/user-attachments/assets/19555ebe-6ac1-430b-a338-eede31090118" />)

[//]: # (</p>)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Products" src="https://github.com/user-attachments/assets/3ad69e09-225c-4b2e-98dc-e627803f604b" />)

[//]: # (  <img width="240" alt="Products" src="https://github.com/user-attachments/assets/d59238c8-41a0-43ba-9dda-72737e34f18e" />)

[//]: # (  <img width="240" alt="Products" src="https://github.com/user-attachments/assets/d9beaba0-57c0-422c-8c83-64e81d877160" />)

[//]: # (</p>)

[//]: # (## User Settings)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="User settings" src="https://github.com/user-attachments/assets/5f5cb653-0db4-40ab-a54e-0e5d41c1ffdb" />)

[//]: # (  <img width="240" alt="User settings" src="https://github.com/user-attachments/assets/8bcbe91a-c7ac-450e-b1f8-03a86e4a8b7a" />)

[//]: # (  <img width="240" alt="User settings" src="https://github.com/user-attachments/assets/614146ad-1efc-48f7-8a1b-230b17e44022" />)

[//]: # (</p>)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="User settings" src="https://github.com/user-attachments/assets/fc3f50e6-f382-4e0b-8ee3-0ac3a315aa06" />)

[//]: # (  <img width="240" alt="User settings" src="https://github.com/user-attachments/assets/78fdca48-4408-4728-b026-a4257cb1e6b7" />)

[//]: # (</p>)

[//]: # (## Login & Register)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Login" src="https://github.com/user-attachments/assets/8d8fa002-c1c3-41e1-b10e-00f712aad690" />)

[//]: # (  <img width="240" alt="Register" src="https://github.com/user-attachments/assets/63a6a851-53c0-4de8-9faa-30d9824a0522" />)

[//]: # (</p>)

[//]: # (## Orders)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Orders" src="https://github.com/user-attachments/assets/6f26a2f3-ef09-408e-886d-3610b8d38ac2" />)

[//]: # (  <img width="240" alt="Orders" src="https://github.com/user-attachments/assets/d4543f36-595c-4fea-9bdb-822e469d8b4d" />)

[//]: # (  <img width="240" alt="Orders" src="https://github.com/user-attachments/assets/0dfe0e9f-2bf6-4d94-b6c7-60ce0b2cc2b7" />)

[//]: # (</p>)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Orders" src="https://github.com/user-attachments/assets/dce2de45-01e0-4def-8ac0-7edf4f0f987d" />)

[//]: # (</p>)

[//]: # (## Cart)

[//]: # (<p align="center">)

[//]: # (  <img width="240" alt="Cart" src="https://github.com/user-attachments/assets/1a53b131-fd17-4916-8e61-8b5c92da4dbe" />)

[//]: # (</p>)
