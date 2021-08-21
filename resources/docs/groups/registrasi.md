# Registrasi


## Register akun Psikolog
untuk pendaftaran akun user psikolog




> Example request:

```javascript
const url = new URL(
    "http://localhost/user/daftar"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "username": "quae",
    "email": "sequi",
    "password": "consequatur"
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
    "status": "success\/failed",
    "message": "Pendaftaran Berhasil",
    "data": "user"
}
```
<div id="execution-results-POSTuser-daftar" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-daftar"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-daftar"></code></pre>
</div>
<div id="execution-error-POSTuser-daftar" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-daftar"></code></pre>
</div>
<form id="form-POSTuser-daftar" data-method="POST" data-path="user/daftar" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-daftar', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-daftar" onclick="tryItOut('POSTuser-daftar');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-daftar" onclick="cancelTryOut('POSTuser-daftar');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-daftar" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/daftar</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="POSTuser-daftar" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>email</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTuser-daftar" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>password</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTuser-daftar" data-component="body" required  hidden>
<br>
</p>

</form>


## Input data alumni 
untuk isi profile pendaftar setelah verifikasi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tahun_masuk": 20,
    "tahun_lulus": 15,
    "jurusan_id": 17,
    "universitas_id": 20,
    "nomor_ijazah": "aperiam",
    "nama_lengkap": "delectus",
    "tempat_lahir": "delectus",
    "kota1_id": 7,
    "kota2_id": 11,
    "no_hp": 1,
    "bidang_id": 19
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
    "status": "success\/failed",
    "message": "Update user Berhasil",
    "data": "user"
}
```
<div id="execution-results-POSTuser-update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-update"></code></pre>
</div>
<div id="execution-error-POSTuser-update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-update"></code></pre>
</div>
<form id="form-POSTuser-update" data-method="POST" data-path="user/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-update" onclick="tryItOut('POSTuser-update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-update" onclick="cancelTryOut('POSTuser-update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/update</code></b>
</p>
<p>
<label id="auth-POSTuser-update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>tahun_masuk</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tahun_masuk" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tahun_lulus</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tahun_lulus" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>jurusan_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="jurusan_id" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>universitas_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="universitas_id" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>nomor_ijazah</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nomor_ijazah" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>nama_lengkap</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_lengkap" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tempat_lahir</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="tempat_lahir" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>kota1_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="kota1_id" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>kota2_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kota2_id" data-endpoint="POSTuser-update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>no_hp</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="no_hp" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>bidang_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="bidang_id" data-endpoint="POSTuser-update" data-component="body" required  hidden>
<br>
</p>

</form>


## Import Data Alumni UGM
untuk import data alumni

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/import-alumni"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('file', document.querySelector('input[name="file"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-import-alumni" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-import-alumni"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-import-alumni"></code></pre>
</div>
<div id="execution-error-POSTadmin-import-alumni" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-import-alumni"></code></pre>
</div>
<form id="form-POSTadmin-import-alumni" data-method="POST" data-path="admin/import-alumni" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-import-alumni', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-import-alumni" onclick="tryItOut('POSTadmin-import-alumni');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-import-alumni" onclick="cancelTryOut('POSTadmin-import-alumni');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-import-alumni" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/import-alumni</code></b>
</p>
<p>
<label id="auth-POSTadmin-import-alumni" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-import-alumni" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="file" data-endpoint="POSTadmin-import-alumni" data-component="body" required  hidden>
<br>
</p>

</form>


## Import Data User UGM

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/import-user"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('file', document.querySelector('input[name="file"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-import-user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-import-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-import-user"></code></pre>
</div>
<div id="execution-error-POSTadmin-import-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-import-user"></code></pre>
</div>
<form id="form-POSTadmin-import-user" data-method="POST" data-path="admin/import-user" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-import-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-import-user" onclick="tryItOut('POSTadmin-import-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-import-user" onclick="cancelTryOut('POSTadmin-import-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-import-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/import-user</code></b>
</p>
<p>
<label id="auth-POSTadmin-import-user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-import-user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="file" data-endpoint="POSTadmin-import-user" data-component="body" required  hidden>
<br>
</p>

</form>


## List registran
untuk list pendaftar yang ada didaftar alumni

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/list-registran"
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


> Example response (200):

```json

{
[
     {
  "id": 12,
  "nama": "bayu",
  "status": 0
     }
 ]
}
```
<div id="execution-results-GETadmin-list-registran" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-list-registran"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-list-registran"></code></pre>
</div>
<div id="execution-error-GETadmin-list-registran" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-list-registran"></code></pre>
</div>
<form id="form-GETadmin-list-registran" data-method="GET" data-path="admin/list-registran" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-list-registran', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-list-registran" onclick="tryItOut('GETadmin-list-registran');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-list-registran" onclick="cancelTryOut('GETadmin-list-registran');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-list-registran" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/list-registran</code></b>
</p>
<p>
<label id="auth-GETadmin-list-registran" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-list-registran" data-component="header"></label>
</p>
</form>


## unlist registran
untuk pendaftar yang tidak terdaftar di data alumni

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/unlist-registran"
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


> Example response (200):

```json
[
    {
        "id": 13,
        "status": 0,
        "nomor_ijazah": "76858576",
        "no_ijazah": null
    }
]
```
<div id="execution-results-GETadmin-unlist-registran" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-unlist-registran"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-unlist-registran"></code></pre>
</div>
<div id="execution-error-GETadmin-unlist-registran" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-unlist-registran"></code></pre>
</div>
<form id="form-GETadmin-unlist-registran" data-method="GET" data-path="admin/unlist-registran" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-unlist-registran', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-unlist-registran" onclick="tryItOut('GETadmin-unlist-registran');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-unlist-registran" onclick="cancelTryOut('GETadmin-unlist-registran');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-unlist-registran" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/unlist-registran</code></b>
</p>
<p>
<label id="auth-GETadmin-unlist-registran" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-unlist-registran" data-component="header"></label>
</p>
</form>


## confirm registran
untuk verifikasi pendaftar oleh admin, status 1 = diterima, status 2 = ignore

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/confirm-registran"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 1,
    "status": 15
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
    "status": "success\/failed",
    "message": "Confirm user Berhasil",
    "data": "user"
}
```
<div id="execution-results-POSTadmin-confirm-registran" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-confirm-registran"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-confirm-registran"></code></pre>
</div>
<div id="execution-error-POSTadmin-confirm-registran" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-confirm-registran"></code></pre>
</div>
<form id="form-POSTadmin-confirm-registran" data-method="POST" data-path="admin/confirm-registran" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-confirm-registran', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-confirm-registran" onclick="tryItOut('POSTadmin-confirm-registran');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-confirm-registran" onclick="cancelTryOut('POSTadmin-confirm-registran');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-confirm-registran" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/confirm-registran</code></b>
</p>
<p>
<label id="auth-POSTadmin-confirm-registran" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-confirm-registran" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-confirm-registran" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="status" data-endpoint="POSTadmin-confirm-registran" data-component="body" required  hidden>
<br>
</p>

</form>


## Ignore registran

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/ignore-registran/sed"
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


> Example response (401):

```json

Unauthorized.
```
<div id="execution-results-GETadmin-ignore-registran--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-ignore-registran--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-ignore-registran--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-ignore-registran--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-ignore-registran--id-"></code></pre>
</div>
<form id="form-GETadmin-ignore-registran--id-" data-method="GET" data-path="admin/ignore-registran/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-ignore-registran--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-ignore-registran--id-" onclick="tryItOut('GETadmin-ignore-registran--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-ignore-registran--id-" onclick="cancelTryOut('GETadmin-ignore-registran--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-ignore-registran--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/ignore-registran/{id}</code></b>
</p>
<p>
<label id="auth-GETadmin-ignore-registran--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-ignore-registran--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="id" data-endpoint="GETadmin-ignore-registran--id-" data-component="url"  hidden>
<br>
</p>
</form>



