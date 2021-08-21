# Cv


## generate cv

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/cv"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internal Server Error</title>
    <style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
    }
    .content {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <img src="http://localhost/handler/pageNotFound.jpg" width="300px"> 
            <h1 style="margin-left:50px;"><b>Internal Server Error</b></h1>
        </div>
    </div>
</body>
</html>
```
<div id="execution-results-GETuser-cv" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-cv"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-cv"></code></pre>
</div>
<div id="execution-error-GETuser-cv" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-cv"></code></pre>
</div>
<form id="form-GETuser-cv" data-method="GET" data-path="user/cv" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-cv', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-cv" onclick="tryItOut('GETuser-cv');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-cv" onclick="cancelTryOut('GETuser-cv');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-cv" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/cv</code></b>
</p>
<p>
<label id="auth-GETuser-cv" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-cv" data-component="header"></label>
</p>
</form>


## delete Cv

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/cv-delete"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETuser-cv-delete" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-cv-delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-cv-delete"></code></pre>
</div>
<div id="execution-error-GETuser-cv-delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-cv-delete"></code></pre>
</div>
<form id="form-GETuser-cv-delete" data-method="GET" data-path="user/cv-delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-cv-delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-cv-delete" onclick="tryItOut('GETuser-cv-delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-cv-delete" onclick="cancelTryOut('GETuser-cv-delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-cv-delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/cv-delete</code></b>
</p>
<p>
<label id="auth-GETuser-cv-delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-cv-delete" data-component="header"></label>
</p>
</form>



