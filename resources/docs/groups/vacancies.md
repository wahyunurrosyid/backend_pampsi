# Vacancies


## Create Vacancies
untuk create vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/vacancies/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('perusahaan', 'ut');
body.append('judul', 'commodi');
body.append('kota_id', '15');
body.append('nama_kategori', 'dolor');
body.append('deskripsi', 'amet');
body.append('start_date', 'quia');
body.append('end_date', 'saepe');
body.append('objLogo', document.querySelector('input[name="objLogo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-vacancies-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-vacancies-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-vacancies-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-vacancies-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-vacancies-create"></code></pre>
</div>
<form id="form-POSTadmin-vacancies-create" data-method="POST" data-path="admin/vacancies/create" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-vacancies-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-vacancies-create" onclick="tryItOut('POSTadmin-vacancies-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-vacancies-create" onclick="cancelTryOut('POSTadmin-vacancies-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-vacancies-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/vacancies/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-vacancies-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-vacancies-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>perusahaan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="perusahaan" data-endpoint="POSTadmin-vacancies-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="judul" data-endpoint="POSTadmin-vacancies-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>kota_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="kota_id" data-endpoint="POSTadmin-vacancies-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTadmin-vacancies-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTadmin-vacancies-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="start_date" data-endpoint="POSTadmin-vacancies-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTadmin-vacancies-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>objLogo</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="objLogo" data-endpoint="POSTadmin-vacancies-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## Update Vacancies
untuk update vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/vacancies/14/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('perusahaan', 'iste');
body.append('judul', 'repudiandae');
body.append('kota_id', '19');
body.append('nama_kategori', 'totam');
body.append('deskripsi', 'quasi');
body.append('start_date', 'sed');
body.append('end_date', 'ut');
body.append('objLogo', document.querySelector('input[name="objLogo"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-vacancies--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-vacancies--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-vacancies--id--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-vacancies--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-vacancies--id--update"></code></pre>
</div>
<form id="form-POSTadmin-vacancies--id--update" data-method="POST" data-path="admin/vacancies/{id}/update" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-vacancies--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-vacancies--id--update" onclick="tryItOut('POSTadmin-vacancies--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-vacancies--id--update" onclick="cancelTryOut('POSTadmin-vacancies--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-vacancies--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/vacancies/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-vacancies--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-vacancies--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-vacancies--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>perusahaan</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="perusahaan" data-endpoint="POSTadmin-vacancies--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="judul" data-endpoint="POSTadmin-vacancies--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>kota_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kota_id" data-endpoint="POSTadmin-vacancies--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTadmin-vacancies--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTadmin-vacancies--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="start_date" data-endpoint="POSTadmin-vacancies--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="end_date" data-endpoint="POSTadmin-vacancies--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>objLogo</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="objLogo" data-endpoint="POSTadmin-vacancies--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Vacancies
untuk menghapus vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/vacancies/20/delete"
);

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


<div id="execution-results-POSTadmin-vacancies--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-vacancies--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-vacancies--id--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-vacancies--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-vacancies--id--delete"></code></pre>
</div>
<form id="form-POSTadmin-vacancies--id--delete" data-method="POST" data-path="admin/vacancies/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-vacancies--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-vacancies--id--delete" onclick="tryItOut('POSTadmin-vacancies--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-vacancies--id--delete" onclick="cancelTryOut('POSTadmin-vacancies--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-vacancies--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/vacancies/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-vacancies--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-vacancies--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-vacancies--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Kategori Vacancies
untuk create kategori vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/vacancies-kategori/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "eveniet"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-vacancies-kategori-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-vacancies-kategori-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-vacancies-kategori-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-vacancies-kategori-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-vacancies-kategori-create"></code></pre>
</div>
<form id="form-POSTadmin-vacancies-kategori-create" data-method="POST" data-path="admin/vacancies-kategori/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-vacancies-kategori-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-vacancies-kategori-create" onclick="tryItOut('POSTadmin-vacancies-kategori-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-vacancies-kategori-create" onclick="cancelTryOut('POSTadmin-vacancies-kategori-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-vacancies-kategori-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/vacancies-kategori/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-vacancies-kategori-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-vacancies-kategori-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-vacancies-kategori-create" data-component="body"  hidden>
<br>
</p>

</form>


## Update Kategori Vacancies
untuk update kategori vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/vacancies-kategori/ducimus/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "aperiam"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-vacancies-kategori--nama--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-vacancies-kategori--nama--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-vacancies-kategori--nama--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-vacancies-kategori--nama--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-vacancies-kategori--nama--update"></code></pre>
</div>
<form id="form-POSTadmin-vacancies-kategori--nama--update" data-method="POST" data-path="admin/vacancies-kategori/{nama}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-vacancies-kategori--nama--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-vacancies-kategori--nama--update" onclick="tryItOut('POSTadmin-vacancies-kategori--nama--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-vacancies-kategori--nama--update" onclick="cancelTryOut('POSTadmin-vacancies-kategori--nama--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-vacancies-kategori--nama--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/vacancies-kategori/{nama}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-vacancies-kategori--nama--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-vacancies-kategori--nama--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-vacancies-kategori--nama--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-vacancies-kategori--nama--update" data-component="body"  hidden>
<br>
</p>

</form>


## Delete Kategori Vacancies
untuk delete kategori vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/vacancies-kategori/ducimus/delete"
);

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


<div id="execution-results-POSTadmin-vacancies-kategori--nama--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-vacancies-kategori--nama--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-vacancies-kategori--nama--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-vacancies-kategori--nama--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-vacancies-kategori--nama--delete"></code></pre>
</div>
<form id="form-POSTadmin-vacancies-kategori--nama--delete" data-method="POST" data-path="admin/vacancies-kategori/{nama}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-vacancies-kategori--nama--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-vacancies-kategori--nama--delete" onclick="tryItOut('POSTadmin-vacancies-kategori--nama--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-vacancies-kategori--nama--delete" onclick="cancelTryOut('POSTadmin-vacancies-kategori--nama--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-vacancies-kategori--nama--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/vacancies-kategori/{nama}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-vacancies-kategori--nama--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-vacancies-kategori--nama--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-vacancies-kategori--nama--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## List Vacancies
untuk list vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/vacancies"
);

let params = {
    "fields[agenda]": "ut",
    "filter[nama_kategori]": "voluptates",
    "sort": "consectetur",
    "page[number]": "11",
    "page[size]": "19",
    "include": "maiores",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
<div id="execution-results-GETuser-vacancies" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-vacancies"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-vacancies"></code></pre>
</div>
<div id="execution-error-GETuser-vacancies" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-vacancies"></code></pre>
</div>
<form id="form-GETuser-vacancies" data-method="GET" data-path="user/vacancies" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-vacancies', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-vacancies" onclick="tryItOut('GETuser-vacancies');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-vacancies" onclick="cancelTryOut('GETuser-vacancies');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-vacancies" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/vacancies</code></b>
</p>
<p>
<label id="auth-GETuser-vacancies" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-vacancies" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[agenda]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[agenda]" data-endpoint="GETuser-vacancies" data-component="query"  hidden>
<br>
select kolom 'perusahaan','judul','kota_id','nama_kategori',
'deskripsi','start_date','end_date','logo'</p>
<p>
<b><code>filter[nama_kategori]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_kategori]" data-endpoint="GETuser-vacancies" data-component="query"  hidden>
<br>
Filter by nama nama_kategori.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-vacancies" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-vacancies" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-vacancies" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-vacancies" data-component="query"  hidden>
<br>
get data relasi (dataKota)</p>
</form>


## List Kategori Vacancies
untuk list kategori vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/vacancies-kategori"
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
<div id="execution-results-GETuser-vacancies-kategori" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-vacancies-kategori"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-vacancies-kategori"></code></pre>
</div>
<div id="execution-error-GETuser-vacancies-kategori" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-vacancies-kategori"></code></pre>
</div>
<form id="form-GETuser-vacancies-kategori" data-method="GET" data-path="user/vacancies-kategori" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-vacancies-kategori', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-vacancies-kategori" onclick="tryItOut('GETuser-vacancies-kategori');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-vacancies-kategori" onclick="cancelTryOut('GETuser-vacancies-kategori');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-vacancies-kategori" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/vacancies-kategori</code></b>
</p>
<p>
<label id="auth-GETuser-vacancies-kategori" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-vacancies-kategori" data-component="header"></label>
</p>
</form>


## List applyer

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/vacancies/applyers"
);

let params = {
    "fields[vacancies_id]": "hic",
    "sort": "dolorem",
    "page[number]": "5",
    "page[size]": "12",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
<div id="execution-results-GETuser-vacancies-applyers" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-vacancies-applyers"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-vacancies-applyers"></code></pre>
</div>
<div id="execution-error-GETuser-vacancies-applyers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-vacancies-applyers"></code></pre>
</div>
<form id="form-GETuser-vacancies-applyers" data-method="GET" data-path="user/vacancies/applyers" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-vacancies-applyers', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-vacancies-applyers" onclick="tryItOut('GETuser-vacancies-applyers');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-vacancies-applyers" onclick="cancelTryOut('GETuser-vacancies-applyers');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-vacancies-applyers" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/vacancies/applyers</code></b>
</p>
<p>
<label id="auth-GETuser-vacancies-applyers" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-vacancies-applyers" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[vacancies_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[vacancies_id]" data-endpoint="GETuser-vacancies-applyers" data-component="query"  hidden>
<br>
select kolom.</p>
<p>
<b><code>filter[users.username]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[users.username]" data-endpoint="GETuser-vacancies-applyers" data-component="query"  hidden>
<br>
Filter by nama vacancies.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-vacancies-applyers" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-vacancies-applyers" data-component="query"  hidden>
<br>
nomor halaman.</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-vacancies-applyers" data-component="query"  hidden>
<br>
jumlah item per halaman.</p>
</form>


## update status applyer

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/vacancies/applyers/et/status"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "status": "itaque"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-vacancies-applyers--id--status" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-vacancies-applyers--id--status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-vacancies-applyers--id--status"></code></pre>
</div>
<div id="execution-error-POSTuser-vacancies-applyers--id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-vacancies-applyers--id--status"></code></pre>
</div>
<form id="form-POSTuser-vacancies-applyers--id--status" data-method="POST" data-path="user/vacancies/applyers/{id}/status" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-vacancies-applyers--id--status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-vacancies-applyers--id--status" onclick="tryItOut('POSTuser-vacancies-applyers--id--status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-vacancies-applyers--id--status" onclick="cancelTryOut('POSTuser-vacancies-applyers--id--status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-vacancies-applyers--id--status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/vacancies/applyers/{id}/status</code></b>
</p>
<p>
<label id="auth-POSTuser-vacancies-applyers--id--status" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-vacancies-applyers--id--status" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="id" data-endpoint="POSTuser-vacancies-applyers--id--status" data-component="url"  hidden>
<br>
id applyer</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="status" data-endpoint="POSTuser-vacancies-applyers--id--status" data-component="body" required  hidden>
<br>
</p>

</form>


## my apply

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/vacancies/my-apply"
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
<div id="execution-results-GETuser-vacancies-my-apply" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-vacancies-my-apply"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-vacancies-my-apply"></code></pre>
</div>
<div id="execution-error-GETuser-vacancies-my-apply" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-vacancies-my-apply"></code></pre>
</div>
<form id="form-GETuser-vacancies-my-apply" data-method="GET" data-path="user/vacancies/my-apply" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-vacancies-my-apply', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-vacancies-my-apply" onclick="tryItOut('GETuser-vacancies-my-apply');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-vacancies-my-apply" onclick="cancelTryOut('GETuser-vacancies-my-apply');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-vacancies-my-apply" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/vacancies/my-apply</code></b>
</p>
<p>
<label id="auth-GETuser-vacancies-my-apply" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-vacancies-my-apply" data-component="header"></label>
</p>
</form>


## Apply Vacancies
untuk apply vacancies

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/vacancies/13/apply"
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
<div id="execution-results-GETuser-vacancies--id--apply" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-vacancies--id--apply"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-vacancies--id--apply"></code></pre>
</div>
<div id="execution-error-GETuser-vacancies--id--apply" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-vacancies--id--apply"></code></pre>
</div>
<form id="form-GETuser-vacancies--id--apply" data-method="GET" data-path="user/vacancies/{id}/apply" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-vacancies--id--apply', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-vacancies--id--apply" onclick="tryItOut('GETuser-vacancies--id--apply');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-vacancies--id--apply" onclick="cancelTryOut('GETuser-vacancies--id--apply');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-vacancies--id--apply" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/vacancies/{id}/apply</code></b>
</p>
<p>
<label id="auth-GETuser-vacancies--id--apply" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-vacancies--id--apply" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETuser-vacancies--id--apply" data-component="url"  hidden>
<br>
idVacancies</p>
</form>



