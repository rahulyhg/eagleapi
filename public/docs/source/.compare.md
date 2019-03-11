---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)
<!-- END_INFO -->

#Goal

This is the Model for the overall Company goals
Attributes are: content(String), start_date(date), end_date(date)
<!-- START_89928e83926de61f62d0dc8b8ecbee49 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/goals" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/goals",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/goals`

`HEAD api/v1/goals`


<!-- END_89928e83926de61f62d0dc8b8ecbee49 -->

<!-- START_ad9b5a8a26f5de87c607e8010ea004f8 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/goals/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/goals/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/goals/create`

`HEAD api/v1/goals/create`


<!-- END_ad9b5a8a26f5de87c607e8010ea004f8 -->

<!-- START_b48d11443cf73d3b716f9ccc26db50ef -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/goals" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/goals",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/goals`


<!-- END_b48d11443cf73d3b716f9ccc26db50ef -->

<!-- START_f1c03d9b9405944f13a51eb42b7f683f -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/goals/{goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/goals/{goal}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/goals/{goal}`

`HEAD api/v1/goals/{goal}`


<!-- END_f1c03d9b9405944f13a51eb42b7f683f -->

<!-- START_813c09665f73b7c7313afd33a10b3e4e -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/goals/{goal}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/goals/{goal}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/goals/{goal}/edit`

`HEAD api/v1/goals/{goal}/edit`


<!-- END_813c09665f73b7c7313afd33a10b3e4e -->

<!-- START_0c9c0db58496769199051f473940bda0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/goals/{goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/goals/{goal}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/goals/{goal}`

`PATCH api/v1/goals/{goal}`


<!-- END_0c9c0db58496769199051f473940bda0 -->

<!-- START_0ef43573dbc8ea17347c513c5d0f1d93 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/goals/{goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/goals/{goal}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/goals/{goal}`


<!-- END_0ef43573dbc8ea17347c513c5d0f1d93 -->

#IPM

This is the Model for the employee Individual IPMs
Attributes are: content(String), start_date(date), end_date(date), employee_id(integer)
<!-- START_2a01aac9c21f89fdaf3477fce44273eb -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/ipms" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ipms",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/ipms`

`HEAD api/v1/ipms`


<!-- END_2a01aac9c21f89fdaf3477fce44273eb -->

<!-- START_6be1659c345aaf3209a8588474f5c047 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/ipms/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ipms/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/ipms/create`

`HEAD api/v1/ipms/create`


<!-- END_6be1659c345aaf3209a8588474f5c047 -->

<!-- START_e59530849ef2b3bb4214479948b43529 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/ipms" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ipms",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/ipms`


<!-- END_e59530849ef2b3bb4214479948b43529 -->

<!-- START_740e99e2c0880fdccea718d3b49dc814 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/ipms/{ipm}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ipms/{ipm}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/ipms/{ipm}`

`HEAD api/v1/ipms/{ipm}`


<!-- END_740e99e2c0880fdccea718d3b49dc814 -->

<!-- START_1b1e847cd85f8cc53089358401a9317f -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/ipms/{ipm}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ipms/{ipm}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/ipms/{ipm}/edit`

`HEAD api/v1/ipms/{ipm}/edit`


<!-- END_1b1e847cd85f8cc53089358401a9317f -->

<!-- START_e6c5b679a772784ae77167b255a85071 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/ipms/{ipm}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ipms/{ipm}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/ipms/{ipm}`

`PATCH api/v1/ipms/{ipm}`


<!-- END_e6c5b679a772784ae77167b255a85071 -->

<!-- START_f4d145e096dabdba40561965d085e456 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/ipms/{ipm}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ipms/{ipm}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/ipms/{ipm}`


<!-- END_f4d145e096dabdba40561965d085e456 -->

#IndGoal

This is the Model for the employee Individual Goals
Attributes are: content(String), start_date(date), end_date(date), approved(boolean), status(boolean) to indicate completion, employee_id(integer)
<!-- START_7152fa331f5db522d153dca391bcf11b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/ind_goals" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/ind_goals`

`HEAD api/v1/ind_goals`


<!-- END_7152fa331f5db522d153dca391bcf11b -->

<!-- START_846e9ee0686b4c204a3d6254438ca516 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/ind_goals/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/ind_goals/create`

`HEAD api/v1/ind_goals/create`


<!-- END_846e9ee0686b4c204a3d6254438ca516 -->

<!-- START_fb3867d8373f0f7181bed48f51cca469 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/ind_goals" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/ind_goals`


<!-- END_fb3867d8373f0f7181bed48f51cca469 -->

<!-- START_a404bda4737a21ce8d297efafd154e8b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/ind_goals/{ind_goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals/{ind_goal}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/ind_goals/{ind_goal}`

`HEAD api/v1/ind_goals/{ind_goal}`


<!-- END_a404bda4737a21ce8d297efafd154e8b -->

<!-- START_d112d4a8aeb6c0f17d776e25c3e1bf55 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/ind_goals/{ind_goal}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals/{ind_goal}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/ind_goals/{ind_goal}/edit`

`HEAD api/v1/ind_goals/{ind_goal}/edit`


<!-- END_d112d4a8aeb6c0f17d776e25c3e1bf55 -->

<!-- START_066c27f4f59d8c7196cd32a613e83e56 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/ind_goals/{ind_goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals/{ind_goal}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/ind_goals/{ind_goal}`

`PATCH api/v1/ind_goals/{ind_goal}`


<!-- END_066c27f4f59d8c7196cd32a613e83e56 -->

<!-- START_5fd649000d8e1d77627eaa8b6eb1164e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/ind_goals/{ind_goal}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals/{ind_goal}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/ind_goals/{ind_goal}`


<!-- END_5fd649000d8e1d77627eaa8b6eb1164e -->

#KeyResult

This is the Model for the Unit KeyResults
Attributes are: content(String), start_date(date), end_date(date), objective_id(integer)
<!-- START_8ba22f9759663ec985944eb83d7b308b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/keyresults" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/keyresults`

`HEAD api/v1/keyresults`


<!-- END_8ba22f9759663ec985944eb83d7b308b -->

<!-- START_2e28ad20071280932a8ed0f9be003fbf -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/keyresults/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/keyresults/create`

`HEAD api/v1/keyresults/create`


<!-- END_2e28ad20071280932a8ed0f9be003fbf -->

<!-- START_95830bab3fdc8c347a13038c5bb7b5fa -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/keyresults" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/keyresults`


<!-- END_95830bab3fdc8c347a13038c5bb7b5fa -->

<!-- START_3383c22e42170d757347cd9eda9129b3 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/keyresults/{keyresult}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults/{keyresult}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/keyresults/{keyresult}`

`HEAD api/v1/keyresults/{keyresult}`


<!-- END_3383c22e42170d757347cd9eda9129b3 -->

<!-- START_dbf0d34259f20021403fb8fdd6a496c9 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/keyresults/{keyresult}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults/{keyresult}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/keyresults/{keyresult}/edit`

`HEAD api/v1/keyresults/{keyresult}/edit`


<!-- END_dbf0d34259f20021403fb8fdd6a496c9 -->

<!-- START_71d4fecab3b888cbb1b177e438b60652 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/keyresults/{keyresult}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults/{keyresult}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/keyresults/{keyresult}`

`PATCH api/v1/keyresults/{keyresult}`


<!-- END_71d4fecab3b888cbb1b177e438b60652 -->

<!-- START_0e342ece15b353f7a55d5ace7cd209ef -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/keyresults/{keyresult}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults/{keyresult}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/keyresults/{keyresult}`


<!-- END_0e342ece15b353f7a55d5ace7cd209ef -->

#Objective

This is the Model for the Unit Objectives
Attributes are: content(String), start_date(date), end_date(date), unit_id(integer)
<!-- START_672f62bfe5b3fffc12b7107b4d6a5312 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/objectives" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/objectives",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/objectives`

`HEAD api/v1/objectives`


<!-- END_672f62bfe5b3fffc12b7107b4d6a5312 -->

<!-- START_33bc0295b605e3d34dff0a819d35881b -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/objectives/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/objectives/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/objectives/create`

`HEAD api/v1/objectives/create`


<!-- END_33bc0295b605e3d34dff0a819d35881b -->

<!-- START_c2370f8732acbfbb581ad054fa40cfcc -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/objectives" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/objectives",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/objectives`


<!-- END_c2370f8732acbfbb581ad054fa40cfcc -->

<!-- START_3bcab4e6ad7059bbb8470e83195673a1 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/objectives/{objective}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/objectives/{objective}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/objectives/{objective}`

`HEAD api/v1/objectives/{objective}`


<!-- END_3bcab4e6ad7059bbb8470e83195673a1 -->

<!-- START_c20a75f96821a50df2eae3664d7e4bfb -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/objectives/{objective}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/objectives/{objective}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/objectives/{objective}/edit`

`HEAD api/v1/objectives/{objective}/edit`


<!-- END_c20a75f96821a50df2eae3664d7e4bfb -->

<!-- START_26385a1b457b3ab87fee947be73b7e90 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/objectives/{objective}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/objectives/{objective}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/objectives/{objective}`

`PATCH api/v1/objectives/{objective}`


<!-- END_26385a1b457b3ab87fee947be73b7e90 -->

<!-- START_ce0f1ee0c3b5539103636670952e7a06 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/objectives/{objective}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/objectives/{objective}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/objectives/{objective}`


<!-- END_ce0f1ee0c3b5539103636670952e7a06 -->

#Role

This is the Model for the Roles
Attributes are: name(String), permissions(string)
<!-- START_d97fba8dbd0d0033960fdc6a25fca8d9 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/roles",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/roles`

`HEAD api/v1/roles`


<!-- END_d97fba8dbd0d0033960fdc6a25fca8d9 -->

<!-- START_eca5134dd250ffaebd57498103c49319 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/roles/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/roles/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/roles/create`

`HEAD api/v1/roles/create`


<!-- END_eca5134dd250ffaebd57498103c49319 -->

<!-- START_5f753b2bffb6b34b6136ddfe1be7bcce -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/roles",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/roles`


<!-- END_5f753b2bffb6b34b6136ddfe1be7bcce -->

<!-- START_f47a034257a009b731160db044157715 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/roles/{role}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/roles/{role}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/roles/{role}`

`HEAD api/v1/roles/{role}`


<!-- END_f47a034257a009b731160db044157715 -->

<!-- START_d7b8be1852f1a1b9b0c2c2cc603d0bf6 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/roles/{role}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/roles/{role}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/roles/{role}/edit`

`HEAD api/v1/roles/{role}/edit`


<!-- END_d7b8be1852f1a1b9b0c2c2cc603d0bf6 -->

<!-- START_81ac9047f8db2b92092c5a7f13e5d28d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/roles/{role}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/roles/{role}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/roles/{role}`

`PATCH api/v1/roles/{role}`


<!-- END_81ac9047f8db2b92092c5a7f13e5d28d -->

<!-- START_04c524fc2f0ea8c793406426144b4c71 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/roles/{role}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/roles/{role}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/roles/{role}`


<!-- END_04c524fc2f0ea8c793406426144b4c71 -->

#Task

This is the Model for the Tasks
Attributes are: content(String), start_date(date), end_date(date), employee_id, goal_id, ipm_id, rating(integer), status (boolean), approved (boolean)
<!-- START_8515037be07bcb443a14691ac62822fe -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/tasks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/tasks",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/tasks`

`HEAD api/v1/tasks`


<!-- END_8515037be07bcb443a14691ac62822fe -->

<!-- START_98a574bde7ccec933b33435531bfdfc2 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/tasks/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/tasks/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/tasks/create`

`HEAD api/v1/tasks/create`


<!-- END_98a574bde7ccec933b33435531bfdfc2 -->

<!-- START_930d0ef44833bc7192b1e31cbd94fd87 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/tasks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/tasks",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/tasks`


<!-- END_930d0ef44833bc7192b1e31cbd94fd87 -->

<!-- START_6c2c8e52cea1c493c00f7834c176ef86 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/tasks/{task}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/tasks/{task}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/tasks/{task}`

`HEAD api/v1/tasks/{task}`


<!-- END_6c2c8e52cea1c493c00f7834c176ef86 -->

<!-- START_8897abef31fa8453082cc742175807fd -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/tasks/{task}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/tasks/{task}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/tasks/{task}/edit`

`HEAD api/v1/tasks/{task}/edit`


<!-- END_8897abef31fa8453082cc742175807fd -->

<!-- START_cc8eda185e9e68067a63ed146b3c1ec7 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/tasks/{task}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/tasks/{task}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/tasks/{task}`

`PATCH api/v1/tasks/{task}`


<!-- END_cc8eda185e9e68067a63ed146b3c1ec7 -->

<!-- START_0aea2007ba2b6701a1fd0be8aa69ef74 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/tasks/{task}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/tasks/{task}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/tasks/{task}`


<!-- END_0aea2007ba2b6701a1fd0be8aa69ef74 -->

#Unit

This is the Model for the Units
Attributes are: name(String), unit_lead(integer) a foreign key for employee (User)
<!-- START_82952855fc557e95349a5414e2473bd3 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/units" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/units",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/units`

`HEAD api/v1/units`


<!-- END_82952855fc557e95349a5414e2473bd3 -->

<!-- START_1f74e23e04880638b7d37e27e5dd182a -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/units/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/units/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/units/create`

`HEAD api/v1/units/create`


<!-- END_1f74e23e04880638b7d37e27e5dd182a -->

<!-- START_f2d1b34b2207e414c3225c8ad0b241df -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/units" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/units",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/units`


<!-- END_f2d1b34b2207e414c3225c8ad0b241df -->

<!-- START_2aa6f72e42d9643aae971e0a2226d752 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/units/{unit}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/units/{unit}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/units/{unit}`

`HEAD api/v1/units/{unit}`


<!-- END_2aa6f72e42d9643aae971e0a2226d752 -->

<!-- START_03f4938fb57979866c13543e7cb53d86 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/units/{unit}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/units/{unit}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/units/{unit}/edit`

`HEAD api/v1/units/{unit}/edit`


<!-- END_03f4938fb57979866c13543e7cb53d86 -->

<!-- START_e7070c9fef003c03b460ea4f58916be0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/units/{unit}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/units/{unit}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/units/{unit}`

`PATCH api/v1/units/{unit}`


<!-- END_e7070c9fef003c03b460ea4f58916be0 -->

<!-- START_0f2a8b1271170295a5eb880cfbc1a49a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/units/{unit}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/units/{unit}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/units/{unit}`


<!-- END_0f2a8b1271170295a5eb880cfbc1a49a -->

#Vision

This is the Model for the Vision
Attributes are: content(String), start_date(date), end_date(date)
<!-- START_43759e6566bfca255aeed865e0b3421e -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/visions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/visions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/visions`

`HEAD api/v1/visions`


<!-- END_43759e6566bfca255aeed865e0b3421e -->

<!-- START_d7452eb572e361f2baf55ef6b7e8fe4d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/visions/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/visions/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/visions/create`

`HEAD api/v1/visions/create`


<!-- END_d7452eb572e361f2baf55ef6b7e8fe4d -->

<!-- START_47f3dd82ee868f3afd95759007ff9eda -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/visions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/visions",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/visions`


<!-- END_47f3dd82ee868f3afd95759007ff9eda -->

<!-- START_fc2de0a37bda72e72a112480778ff708 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/visions/{vision}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/visions/{vision}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 124,
    "trace": [
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 53,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 682,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 657,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 612,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 140,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 137,
            "function": "callRoute",
            "class": "Oxycoder\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 80,
            "function": "getRouteResponse",
            "class": "Oxycoder\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 272,
            "function": "processRoute",
            "class": "Oxycoder\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 86,
            "function": "processLaravelRoutes",
            "class": "Oxycoder\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Oxycoder\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 580,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\symfony\\console\\Application.php",
            "line": 908,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\symfony\\console\\Application.php",
            "line": 269,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 90,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/visions/{vision}`

`HEAD api/v1/visions/{vision}`


<!-- END_fc2de0a37bda72e72a112480778ff708 -->

<!-- START_7383751939c2264f9f0d44454de31362 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/visions/{vision}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/visions/{vision}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 124,
    "trace": [
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 53,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 682,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 657,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 623,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 612,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 163,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 140,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 137,
            "function": "callRoute",
            "class": "Oxycoder\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 80,
            "function": "getRouteResponse",
            "class": "Oxycoder\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 272,
            "function": "processRoute",
            "class": "Oxycoder\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\oxycoder\\laravel-apidoc-generator\\src\\Oxycoder\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 86,
            "function": "processLaravelRoutes",
            "class": "Oxycoder\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Oxycoder\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 32,
            "function": "call_user_func_array"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 90,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 34,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 580,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\symfony\\console\\Application.php",
            "line": 908,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\symfony\\console\\Application.php",
            "line": 269,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 90,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "C:\\xampp\\php\\www\\eagleapi\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/v1/visions/{vision}/edit`

`HEAD api/v1/visions/{vision}/edit`


<!-- END_7383751939c2264f9f0d44454de31362 -->

<!-- START_9ab56e288b4a55df8fd828cad1816d8d -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "https://eagleapi.herokuapp.com/api/v1/visions/{vision}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/visions/{vision}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/v1/visions/{vision}`

`PATCH api/v1/visions/{vision}`


<!-- END_9ab56e288b4a55df8fd828cad1816d8d -->

<!-- START_958a62fe99ca83e8e8a847e4435c6a62 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "https://eagleapi.herokuapp.com/api/v1/visions/{vision}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/visions/{vision}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/v1/visions/{vision}`


<!-- END_958a62fe99ca83e8e8a847e4435c6a62 -->

#general
<!-- START_7a184547882598fc164c10be7745584b -->
## Handles Login Request
FOR SUCCESSFUL REQUEST: Status code 200. Wrong password: Status code 401 (Unauthorized)

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/user/login" \
-H "Accept: application/json" \
    -d "email"="clarabelle94@example.net" \
    -d "password"="excepturi" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/login",
    "method": "POST",
    "data": {
        "email": "clarabelle94@example.net",
        "password": "excepturi"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`POST api/v1/user/login`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 
    password | string |  required  | 

<!-- END_7a184547882598fc164c10be7745584b -->

<!-- START_661673ec7098be811ab1cdb7e9bcc0fa -->
## Handles Registration Request
If supervisor_id is not set, it uses the admin id (1) as the supervisor_id. This can be updated of course

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/user/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/create",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/v1/user/create`


<!-- END_661673ec7098be811ab1cdb7e9bcc0fa -->

<!-- START_8e5610ed60ab9da974a82ef653652d7e -->
## Returns Authenticated User Details

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/user/details" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/details",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/user/details`

`HEAD api/v1/user/details`


<!-- END_8e5610ed60ab9da974a82ef653652d7e -->

