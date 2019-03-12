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

#Auth

This is the Model for the User (Employee)
Attributes are: surname(String), firstname(string), email(string), phone(string),unit_id(integer),gender(string),role_id(integer),password and job_title(string)
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
-H "Accept: application/json" \
    -d "surname"="quia" \
    -d "firstname"="quia" \
    -d "email"="wyman.bernadine@example.org" \
    -d "phone"="quia" \
    -d "unit_id"="quia" \
    -d "gender"="quia" \
    -d "role_id"="quia" \
    -d "password"="quia" \
    -d "job_title"="quia" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/create",
    "method": "POST",
    "data": {
        "surname": "quia",
        "firstname": "quia",
        "email": "wyman.bernadine@example.org",
        "phone": "quia",
        "unit_id": "quia",
        "gender": "quia",
        "role_id": "quia",
        "password": "quia",
        "job_title": "quia"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    surname | string |  required  | 
    firstname | string |  required  | 
    email | email |  required  | 
    phone | string |  required  | 
    unit_id | string |  required  | 
    gender | string |  required  | 
    role_id | string |  required  | 
    password | string |  required  | 
    job_title | string |  required  | 

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

<!-- START_5d224eba34456e61d552db4ec3bbbe6f -->
## Sets User as Unit Lead. Send User ID and Unit ID

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/user/unit_lead/{user}/{unit}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/unit_lead/{user}/{unit}",
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
`POST api/v1/user/unit_lead/{user}/{unit}`


<!-- END_5d224eba34456e61d552db4ec3bbbe6f -->

<!-- START_a94669f933d482ed085d37f238828277 -->
## Demotes Unit Lead to ordinary employee. Send User ID and Unit ID

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/user/demote_unit_lead/{user}/{unit}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/demote_unit_lead/{user}/{unit}",
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
`POST api/v1/user/demote_unit_lead/{user}/{unit}`


<!-- END_a94669f933d482ed085d37f238828277 -->

<!-- START_eb4b419c8576f560a5570534f008fbc5 -->
## Sets User as HR. Send ID

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/user/hr/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/hr/{user}",
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
`POST api/v1/user/hr/{user}`


<!-- END_eb4b419c8576f560a5570534f008fbc5 -->

<!-- START_d98edd81d645f88150c80689c84a84c8 -->
## Demotes User as HR. Send ID

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/user/demote_hr/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/demote_hr/{user}",
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
`POST api/v1/user/demote_hr/{user}`


<!-- END_d98edd81d645f88150c80689c84a84c8 -->

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

<!-- START_b48d11443cf73d3b716f9ccc26db50ef -->
## Store a newly created Goal in storage. Access Level (Admin)

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/goals" \
-H "Accept: application/json" \
    -d "content"="repudiandae" \
    -d "start_date"="2014-12-16" \
    -d "end_date"="2014-12-16" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/goals",
    "method": "POST",
    "data": {
        "content": "repudiandae",
        "start_date": "2014-12-16",
        "end_date": "2014-12-16"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    content | string |  required  | 
    start_date | date |  required  | 
    end_date | date |  required  | 

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

<!-- START_e59530849ef2b3bb4214479948b43529 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/ipms" \
-H "Accept: application/json" \
    -d "start_date"="1982-12-18" \
    -d "end_date"="1982-12-18" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ipms",
    "method": "POST",
    "data": {
        "start_date": "1982-12-18",
        "end_date": "1982-12-18"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    start_date | date |  required  | 
    end_date | date |  required  | 

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

#IndGoal

This is the Model for the employee Individual Goals
Attributes are: content(String), start_date(date), end_date(date), approved(boolean), status(boolean) to indicate completion, employee_id(integer)
<!-- START_7152fa331f5db522d153dca391bcf11b -->
## Display a listing of the Individual Goals.

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

<!-- START_fb3867d8373f0f7181bed48f51cca469 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/ind_goals" \
-H "Accept: application/json" \
    -d "content"="voluptas" \
    -d "start_date"="2007-08-08" \
    -d "end_date"="2007-08-08" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals",
    "method": "POST",
    "data": {
        "content": "voluptas",
        "start_date": "2007-08-08",
        "end_date": "2007-08-08"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    content | string |  required  | 
    start_date | date |  required  | 
    end_date | date |  required  | 

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

<!-- START_fa6894cbbd9a805f972af5e2e5bc6fb8 -->
## Approve an individual Goal by HR or Admin. Send ID

> Example request:

```bash
curl -X PATCH "https://eagleapi.herokuapp.com/api/v1/ind_goals/approve/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals/approve/{id}",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/ind_goals/approve/{id}`


<!-- END_fa6894cbbd9a805f972af5e2e5bc6fb8 -->

<!-- START_da216b00a1ec135ccc37894feceb6f30 -->
## Disapprove an individual Goal by HR or Admin. Send ID

> Example request:

```bash
curl -X PATCH "https://eagleapi.herokuapp.com/api/v1/ind_goals/disapprove/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals/disapprove/{id}",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/ind_goals/disapprove/{id}`


<!-- END_da216b00a1ec135ccc37894feceb6f30 -->

<!-- START_fa4b812d9891b70e25b0ce6a4ada1aff -->
## Complete an individual Goal by User

> Example request:

```bash
curl -X PATCH "https://eagleapi.herokuapp.com/api/v1/ind_goals/complete/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/ind_goals/complete/{id}",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/ind_goals/complete/{id}`


<!-- END_fa4b812d9891b70e25b0ce6a4ada1aff -->

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

<!-- START_95830bab3fdc8c347a13038c5bb7b5fa -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/keyresults" \
-H "Accept: application/json" \
    -d "content"="consequatur" \
    -d "start_date"="2009-11-13" \
    -d "end_date"="2009-11-13" \
    -d "objective_id"="consequatur" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults",
    "method": "POST",
    "data": {
        "content": "consequatur",
        "start_date": "2009-11-13",
        "end_date": "2009-11-13",
        "objective_id": "consequatur"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    content | string |  required  | 
    start_date | date |  required  | 
    end_date | date |  required  | 
    objective_id | string |  required  | 

<!-- END_95830bab3fdc8c347a13038c5bb7b5fa -->

<!-- START_31c40d2d293fe06c2670f8dc7528c393 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PATCH "https://eagleapi.herokuapp.com/api/v1/keyresults/{id}" \
-H "Accept: application/json" \
    -d "objective_id"="sequi" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/keyresults/{id}",
    "method": "PATCH",
    "data": {
        "objective_id": "sequi"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/keyresults/{id}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    objective_id | string |  required  | 

<!-- END_31c40d2d293fe06c2670f8dc7528c393 -->

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

<!-- START_c2370f8732acbfbb581ad054fa40cfcc -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/objectives" \
-H "Accept: application/json" \
    -d "content"="nihil" \
    -d "start_date"="1990-10-05" \
    -d "end_date"="1990-10-05" \
    -d "unit_id"="nihil" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/objectives",
    "method": "POST",
    "data": {
        "content": "nihil",
        "start_date": "1990-10-05",
        "end_date": "1990-10-05",
        "unit_id": "nihil"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    content | string |  required  | 
    start_date | date |  required  | 
    end_date | date |  required  | 
    unit_id | string |  required  | 

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
## Display a listing of the Units.

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

<!-- START_f2d1b34b2207e414c3225c8ad0b241df -->
## Store a newly created Unit in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/units" \
-H "Accept: application/json" \
    -d "name"="quia" \
    -d "unit_lead"="quia" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/units",
    "method": "POST",
    "data": {
        "name": "quia",
        "unit_lead": "quia"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    unit_lead | string |  required  | 

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

#User

This is the Model for the User (Employee)
Attributes are: surname(String), firstname(string), email(string), phone(string),unit_id(integer),gender(string),role_id(integer),password and job_title(string)
<!-- START_64a1f52a58ef974839ac5dff1107c0ba -->
## Display a listing of the resource. Access Level (Logged in)

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/user/all" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/all",
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
`GET api/v1/user/all`

`HEAD api/v1/user/all`


<!-- END_64a1f52a58ef974839ac5dff1107c0ba -->

<!-- START_62cc83659a855b398818615e9c823ca6 -->
## Display the details of a particular User
including ipms, goals, tasks, supervises, unit and supervisor. Access Level Admin or HR or owner of account

> Example request:

```bash
curl -X GET "https://eagleapi.herokuapp.com/api/v1/user/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/{id}",
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
`GET api/v1/user/{id}`

`HEAD api/v1/user/{id}`


<!-- END_62cc83659a855b398818615e9c823ca6 -->

<!-- START_d54ccdf8c8f2ffd18c7102abdf6bacda -->
## Update the authenticated User.

Don't send ID. User will be detected based on Token.

> Example request:

```bash
curl -X PATCH "https://eagleapi.herokuapp.com/api/v1/user/update" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/update",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/user/update`


<!-- END_d54ccdf8c8f2ffd18c7102abdf6bacda -->

<!-- START_ab0589afb7da54197b180fcc16eb9fdd -->
## Update a specified User ID.

> Example request:

```bash
curl -X PATCH "https://eagleapi.herokuapp.com/api/v1/user/admin_update/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/user/admin_update/{id}",
    "method": "PATCH",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PATCH api/v1/user/admin_update/{id}`


<!-- END_ab0589afb7da54197b180fcc16eb9fdd -->

#Vision

This is the Model for the Vision
Attributes are: content(String), start_date(date), end_date(date)
<!-- START_43759e6566bfca255aeed865e0b3421e -->
## Display a listing of the Vision.

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

<!-- START_47f3dd82ee868f3afd95759007ff9eda -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "https://eagleapi.herokuapp.com/api/v1/visions" \
-H "Accept: application/json" \
    -d "content"="in" \
    -d "start_date"="1989-09-17" \
    -d "end_date"="1989-09-17" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "https://eagleapi.herokuapp.com/api/v1/visions",
    "method": "POST",
    "data": {
        "content": "in",
        "start_date": "1989-09-17",
        "end_date": "1989-09-17"
},
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

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    content | string |  required  | 
    start_date | date |  required  | 
    end_date | date |  required  | 

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
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/visions/{vision}`

`HEAD api/v1/visions/{vision}`


<!-- END_fc2de0a37bda72e72a112480778ff708 -->

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

