# Universitas


## DataProvider Universitas
daftar collection universitas dengan pagging

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/all-universitas"
);

let params = {
    "fields[universitas]": "rem",
    "filter[nama]": "saepe",
    "sort": "illo",
    "include": "suscipit",
    "page[number]": "7",
    "page[size]": "1",
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


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "nama": "Universitas Gajah Mada"
        },
        {
            "id": 2,
            "nama": "ITB"
        },
        {
            "id": 3,
            "nama": "Universitas Padjadjaran"
        },
        {
            "id": 4,
            "nama": "ITENAS"
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/admin\/all-universitas?page=1",
        "last": "http:\/\/localhost:8000\/admin\/all-universitas?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/admin\/all-universitas",
        "per_page": 15,
        "to": 4,
        "total": 4
    }
}
```
<div id="execution-results-GETadmin-all-universitas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-all-universitas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-all-universitas"></code></pre>
</div>
<div id="execution-error-GETadmin-all-universitas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-all-universitas"></code></pre>
</div>
<form id="form-GETadmin-all-universitas" data-method="GET" data-path="admin/all-universitas" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-all-universitas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-all-universitas" onclick="tryItOut('GETadmin-all-universitas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-all-universitas" onclick="cancelTryOut('GETadmin-all-universitas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-all-universitas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/all-universitas</code></b>
</p>
<p>
<label id="auth-GETadmin-all-universitas" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-all-universitas" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[universitas]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[universitas]" data-endpoint="GETadmin-all-universitas" data-component="query"  hidden>
<br>
select kolom.</p>
<p>
<b><code>filter[nama]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama]" data-endpoint="GETadmin-all-universitas" data-component="query"  hidden>
<br>
Filter by nama universitas.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-all-universitas" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETadmin-all-universitas" data-component="query"  hidden>
<br>
get data relasi (dataJurusan).</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-all-universitas" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-all-universitas" data-component="query"  hidden>
<br>
oprional</p>
</form>


## View Universitas

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/universitas/3/view"
);

let params = {
    "include": "sit",
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


> Example response (200):

```json
{
    "data": {
        "id": null,
        "nama": null
    }
}
```
<div id="execution-results-GETadmin-universitas--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-universitas--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-universitas--id--view"></code></pre>
</div>
<div id="execution-error-GETadmin-universitas--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-universitas--id--view"></code></pre>
</div>
<form id="form-GETadmin-universitas--id--view" data-method="GET" data-path="admin/universitas/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-universitas--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-universitas--id--view" onclick="tryItOut('GETadmin-universitas--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-universitas--id--view" onclick="cancelTryOut('GETadmin-universitas--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-universitas--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/universitas/{id}/view</code></b>
</p>
<p>
<label id="auth-GETadmin-universitas--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-universitas--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-universitas--id--view" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETadmin-universitas--id--view" data-component="query"  hidden>
<br>
get data relasi (dataJurusan).</p>
</form>


## Create Universitas
untuk create universitas

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/universitas/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "sint"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

// respon berhasil disimpan
{
    "status": "success",
    "message": "data berhasil disimpan!",
    "data": {
        "id": 3,
        "nama": "Universitas Padjadjaran"
    }
}

// respon validasi error
{
    "status": "failed",
    "message": "data gagal disimpan!",
    "data": {
        "errors": {
            "nama": [
                "kolom nama sudah digunakan!",
                "panjang karakter nama kurang dari 20"
            ]
        }
    }
}
```
<div id="execution-results-POSTadmin-universitas-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-universitas-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-universitas-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-universitas-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-universitas-create"></code></pre>
</div>
<form id="form-POSTadmin-universitas-create" data-method="POST" data-path="admin/universitas/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-universitas-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-universitas-create" onclick="tryItOut('POSTadmin-universitas-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-universitas-create" onclick="cancelTryOut('POSTadmin-universitas-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-universitas-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/universitas/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-universitas-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-universitas-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-universitas-create" data-component="body" required  hidden>
<br>
</p>

</form>


## Update Universitas
untuk update universitas

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/universitas/18/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "assumenda"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json

// respon berhasil disimpan
{
    "status": "success",
    "message": "data berhasil disimpan!",
    "data": {
        "id": 3,
        "nama": "Universitas Padjadjaran"
    }
}

// respon validasi error
{
    "status": "failed",
    "message": "data gagal disimpan!",
    "data": {
        "errors": {
            "nama": [
                "kolom nama sudah digunakan!",
                "panjang karakter nama kurang dari 20"
            ]
        }
    }
}
```
<div id="execution-results-POSTadmin-universitas--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-universitas--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-universitas--id--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-universitas--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-universitas--id--update"></code></pre>
</div>
<form id="form-POSTadmin-universitas--id--update" data-method="POST" data-path="admin/universitas/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-universitas--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-universitas--id--update" onclick="tryItOut('POSTadmin-universitas--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-universitas--id--update" onclick="cancelTryOut('POSTadmin-universitas--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-universitas--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/universitas/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-universitas--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-universitas--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-universitas--id--update" data-component="url" required  hidden>
<br>
id universitas</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-universitas--id--update" data-component="body" required  hidden>
<br>
nama harus unik dari yg lain</p>

</form>


## Delete Universitas
untuk delete universitas

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/universitas/dolores/delete"
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


> Example response (200):

```json
{
    "status": "success",
    "message": "Data Universitas berhasil dihapus"
}
```
<div id="execution-results-POSTadmin-universitas--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-universitas--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-universitas--id--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-universitas--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-universitas--id--delete"></code></pre>
</div>
<form id="form-POSTadmin-universitas--id--delete" data-method="POST" data-path="admin/universitas/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-universitas--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-universitas--id--delete" onclick="tryItOut('POSTadmin-universitas--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-universitas--id--delete" onclick="cancelTryOut('POSTadmin-universitas--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-universitas--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/universitas/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-universitas--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-universitas--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTadmin-universitas--id--delete" data-component="url" required  hidden>
<br>
id universitas</p>
</form>



