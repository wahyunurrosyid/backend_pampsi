# Auth


## Login
untuk login user




> Example request:

```javascript
const url = new URL(
    "http://localhost/auth/login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "admin",
    "password": "bmmrhdb2021!"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": "success",
    "message": "user berhasil login",
    "data": {
        "token": "token",
        "user": "user"
    }
}
```
<div id="execution-results-POSTauth-login" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-login"></code></pre>
</div>
<div id="execution-error-POSTauth-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-login"></code></pre>
</div>
<form id="form-POSTauth-login" data-method="POST" data-path="auth/login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-login" onclick="tryItOut('POSTauth-login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-login" onclick="cancelTryOut('POSTauth-login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/login</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="username" data-endpoint="POSTauth-login" data-component="body"  hidden>
<br>
required.</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="password" data-endpoint="POSTauth-login" data-component="body"  hidden>
<br>
required.</p>

</form>


## Logout
untuk logout user




> Example request:

```javascript
const url = new URL(
    "http://localhost/auth/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": "success",
    "message": "logout berhasil",
    "data": []
}
```
<div id="execution-results-POSTauth-logout" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-logout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-logout"></code></pre>
</div>
<div id="execution-error-POSTauth-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-logout"></code></pre>
</div>
<form id="form-POSTauth-logout" data-method="POST" data-path="auth/logout" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-logout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-logout" onclick="tryItOut('POSTauth-logout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-logout" onclick="cancelTryOut('POSTauth-logout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-logout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/logout</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTauth-logout" data-component="body" required  hidden>
<br>
</p>

</form>


## Send Email Reset Password
untuk kirim email reset password ke email user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/auth/password/reset-request"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "voluptas"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTauth-password-reset-request" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-password-reset-request"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-password-reset-request"></code></pre>
</div>
<div id="execution-error-POSTauth-password-reset-request" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-password-reset-request"></code></pre>
</div>
<form id="form-POSTauth-password-reset-request" data-method="POST" data-path="auth/password/reset-request" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-password-reset-request', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-password-reset-request" onclick="tryItOut('POSTauth-password-reset-request');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-password-reset-request" onclick="cancelTryOut('POSTauth-password-reset-request');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-password-reset-request" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/password/reset-request</code></b>
</p>
<p>
<label id="auth-POSTauth-password-reset-request" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTauth-password-reset-request" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTauth-password-reset-request" data-component="body"  hidden>
<br>
</p>

</form>


## Reset Password
untuk reset password

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/auth/password/reset"
);

let params = {
    "token": "maxime",
    "email": "necessitatibus",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTauth-password-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-password-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-password-reset"></code></pre>
</div>
<div id="execution-error-POSTauth-password-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-password-reset"></code></pre>
</div>
<form id="form-POSTauth-password-reset" data-method="POST" data-path="auth/password/reset" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-password-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-password-reset" onclick="tryItOut('POSTauth-password-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-password-reset" onclick="cancelTryOut('POSTauth-password-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-password-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/password/reset</code></b>
</p>
<p>
<label id="auth-POSTauth-password-reset" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTauth-password-reset" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTauth-password-reset" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTauth-password-reset" data-component="query" required  hidden>
<br>
</p>
</form>


## Verifikasi
untuk verifikasi user




> Example request:

```javascript
const url = new URL(
    "http://localhost/auth/verifikasi/nemo"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": "true"
}
```
<div id="execution-results-GETauth-verifikasi--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETauth-verifikasi--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETauth-verifikasi--id-"></code></pre>
</div>
<div id="execution-error-GETauth-verifikasi--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETauth-verifikasi--id-"></code></pre>
</div>
<form id="form-GETauth-verifikasi--id-" data-method="GET" data-path="auth/verifikasi/{id}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETauth-verifikasi--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETauth-verifikasi--id-" onclick="tryItOut('GETauth-verifikasi--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETauth-verifikasi--id-" onclick="cancelTryOut('GETauth-verifikasi--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETauth-verifikasi--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>auth/verifikasi/{id}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETauth-verifikasi--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Token FCM

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/auth/fcm"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "token": "qui"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTauth-fcm" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTauth-fcm"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTauth-fcm"></code></pre>
</div>
<div id="execution-error-POSTauth-fcm" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTauth-fcm"></code></pre>
</div>
<form id="form-POSTauth-fcm" data-method="POST" data-path="auth/fcm" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTauth-fcm', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTauth-fcm" onclick="tryItOut('POSTauth-fcm');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTauth-fcm" onclick="cancelTryOut('POSTauth-fcm');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTauth-fcm" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>auth/fcm</code></b>
</p>
<p>
<label id="auth-POSTauth-fcm" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTauth-fcm" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTauth-fcm" data-component="body" required  hidden>
<br>
</p>

</form>


## resend verifikasi




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/resend-verifikasi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ullam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTgeneral-resend-verifikasi" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTgeneral-resend-verifikasi"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTgeneral-resend-verifikasi"></code></pre>
</div>
<div id="execution-error-POSTgeneral-resend-verifikasi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTgeneral-resend-verifikasi"></code></pre>
</div>
<form id="form-POSTgeneral-resend-verifikasi" data-method="POST" data-path="general/resend-verifikasi" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTgeneral-resend-verifikasi', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTgeneral-resend-verifikasi" onclick="tryItOut('POSTgeneral-resend-verifikasi');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTgeneral-resend-verifikasi" onclick="cancelTryOut('POSTgeneral-resend-verifikasi');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTgeneral-resend-verifikasi" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>general/resend-verifikasi</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTgeneral-resend-verifikasi" data-component="body"  hidden>
<br>
</p>

</form>


## Send Email Reset Password
untuk kirim email reset password ke email user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/general/password/reset-request"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "ipsa"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTgeneral-password-reset-request" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTgeneral-password-reset-request"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTgeneral-password-reset-request"></code></pre>
</div>
<div id="execution-error-POSTgeneral-password-reset-request" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTgeneral-password-reset-request"></code></pre>
</div>
<form id="form-POSTgeneral-password-reset-request" data-method="POST" data-path="general/password/reset-request" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTgeneral-password-reset-request', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTgeneral-password-reset-request" onclick="tryItOut('POSTgeneral-password-reset-request');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTgeneral-password-reset-request" onclick="cancelTryOut('POSTgeneral-password-reset-request');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTgeneral-password-reset-request" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>general/password/reset-request</code></b>
</p>
<p>
<label id="auth-POSTgeneral-password-reset-request" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTgeneral-password-reset-request" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>required</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTgeneral-password-reset-request" data-component="body"  hidden>
<br>
</p>

</form>


## Reset Password
untuk reset password

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/general/password/reset"
);

let params = {
    "token": "voluptatem",
    "email": "in",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTgeneral-password-reset" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTgeneral-password-reset"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTgeneral-password-reset"></code></pre>
</div>
<div id="execution-error-POSTgeneral-password-reset" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTgeneral-password-reset"></code></pre>
</div>
<form id="form-POSTgeneral-password-reset" data-method="POST" data-path="general/password/reset" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTgeneral-password-reset', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTgeneral-password-reset" onclick="tryItOut('POSTgeneral-password-reset');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTgeneral-password-reset" onclick="cancelTryOut('POSTgeneral-password-reset');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTgeneral-password-reset" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>general/password/reset</code></b>
</p>
<p>
<label id="auth-POSTgeneral-password-reset" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTgeneral-password-reset" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>token</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="token" data-endpoint="POSTgeneral-password-reset" data-component="query" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTgeneral-password-reset" data-component="query" required  hidden>
<br>
</p>
</form>



