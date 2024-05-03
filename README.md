<h1 align="center" style="color:white; font-size:3rem; padding:20px 0; text-transform:uppercase; font-family:Lucida Sans Regular;">ElementApi</h1>

<p align="center">
<a href="https://www.linkedin.com/in/thejuange/"><svg xmlns="http://www.w3.org/2000/svg" height="50" width="50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path fill="#5f5cff" d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/></svg></a>


<p id="about" style="color:white; font-size:2rem;">Introduction ElementApi</p>

In today's digital world, APIs have revolutionized the way we interact with data. An API that offers data on chemical elements can be an invaluable tool for students, educators, and professionals. Imagine an API that not only provides detailed information about each element, but is also intuitive and easy to integrate into educational or research projects. With clear examples and comprehensive documentation, users can access a wealth of scientific knowledge with just a few clicks, opening up a universe of possibilities to explore chemistry in a more interactive and accessible way.

- [Introduction](#about).
- [List Endpoint](#list).
- [Method GET](#get)
- [Get all the data](#all)
- [Get a specific element by ID](#showId)
<br><br><br><br>
<p id="list" style="font-size:2rem">List Endpoint</p>

The elementApi api has get, post, put and delete methods. the post, put and delete methods to use them it is necessary to enter the website and log in or if you do not have an account you can create an account for free

## <p id="get"> Method GET </p>
<p>Using the get method we have two endpoints, both to obtain all the records and to search for a specific record by its id.</p>

<p id="all" style="font-size:1.2rem; color:#ffffff">Get all the data</p>
<pre><p style="color:#AFADAD; font-size:1.2rem">https://thejuange.com/api/all</p>
[
    {
        "id": 1,
        "num_atomico": 1,
        "simbolo": "He",
        "nombre": "Helio",
        "grupo": 18,
        "periodo": 1,
        "densidad": "0.0001785",
        "fusion": "-272.2",
        "ebullicion": "-268.9",
        "created_at": "2024-05-02T19:06:01.000000Z",
        "updated_at": "2024-05-02T19:06:01.000000Z"
    },
    {
        "id": 2,
        "num_atomico": 1,
        "simbolo": "H",
        "nombre": "Hidrógeno",
        "grupo": 1,
        "periodo": 1,
        "densidad": "0.00008988",
        "fusion": "-259.2",
        "ebullicion": "-252.9",
        "created_at": "2024-05-02T19:07:58.000000Z",
        "updated_at": "2024-05-02T19:07:58.000000Z"
    },
    {
        "id": 3,
        "num_atomico": 3,
        "simbolo": "Li",
        "nombre": "Litio",
        "grupo": 1,
        "periodo": 2,
        "densidad": "0.534",
        "fusion": "180.5",
        "ebullicion": "1347",
        "created_at": "2024-05-02T19:09:12.000000Z",
        "updated_at": "2024-05-02T19:09:12.000000Z"
    },
    {
        "id": 4,
        "num_atomico": 4,
        "simbolo": "Be",
        "nombre": "Berilio",
        "grupo": 2,
        "periodo": 2,
        "densidad": "1.85",
        "fusion": "1287",
        "ebullicion": "2970",
        "created_at": "2024-05-02T19:11:01.000000Z",
        "updated_at": "2024-05-02T19:11:01.000000Z"
    }
]

</pre>
<br><br><br>
<p id="showId" style="font-size:1.2rem; color:#ffffff">Get a specific element by ID</p>

<pre><p style="color:#AFADAD; font-size:1.2rem">https://thejuange.com/api/search/{$id}</p>
[
    {
        "id": 1,
        "num_atomico": 1,
        "simbolo": "He",
        "nombre": "Helio",
        "grupo": 18,
        "periodo": 1,
        "densidad": "0.0001785",
        "fusion": "-272.2",
        "ebullicion": "-268.9",
        "created_at": "2024-05-02T19:06:01.000000Z",
        "updated_at": "2024-05-02T19:06:01.000000Z"
    }
]

</pre>