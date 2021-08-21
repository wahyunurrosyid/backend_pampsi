# Jurusan


## DataProvider Jurusan
daftar collection jurusan dengan paging

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/all-jurusan"
);

let params = {
    "fields[jurusan]": "dolorem",
    "filter[universitas_id]": "6",
    "filter[nama]": "omnis",
    "filter[kode]": "molestiae",
    "sort": "est",
    "include": "dolor",
    "page[number]": "4",
    "page[size]": "19",
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
            "kode": "KLI",
            "nama": null,
            "dataUniversitas": {
                "id": 1,
                "nama": "Universitas Gajah Mada"
            }
        },
        {
            "id": 2,
            "kode": "PIO",
            "nama": null,
            "dataUniversitas": {
                "id": 1,
                "nama": "Universitas Gajah Mada"
            }
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/admin\/all-jurusan?page=1",
        "last": "http:\/\/localhost:8000\/admin\/all-jurusan?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/admin\/all-jurusan",
        "per_page": 15,
        "to": 3,
        "total": 3
    }
}
```
<div id="execution-results-GETadmin-all-jurusan" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-all-jurusan"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-all-jurusan"></code></pre>
</div>
<div id="execution-error-GETadmin-all-jurusan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-all-jurusan"></code></pre>
</div>
<form id="form-GETadmin-all-jurusan" data-method="GET" data-path="admin/all-jurusan" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-all-jurusan', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-all-jurusan" onclick="tryItOut('GETadmin-all-jurusan');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-all-jurusan" onclick="cancelTryOut('GETadmin-all-jurusan');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-all-jurusan" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/all-jurusan</code></b>
</p>
<p>
<label id="auth-GETadmin-all-jurusan" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-all-jurusan" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[jurusan]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[jurusan]" data-endpoint="GETadmin-all-jurusan" data-component="query"  hidden>
<br>
select kolom 'kode','universitas_id','nama'</p>
<p>
<b><code>filter[universitas_id]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[universitas_id]" data-endpoint="GETadmin-all-jurusan" data-component="query"  hidden>
<br>
Filter by universitas ID.</p>
<p>
<b><code>filter[nama]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama]" data-endpoint="GETadmin-all-jurusan" data-component="query"  hidden>
<br>
Filter by nama jurusan.</p>
<p>
<b><code>filter[kode]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kode]" data-endpoint="GETadmin-all-jurusan" data-component="query"  hidden>
<br>
Filter by kode jurusan.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-all-jurusan" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETadmin-all-jurusan" data-component="query"  hidden>
<br>
get data relasi (dataUniversitas).</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-all-jurusan" data-component="query"  hidden>
<br>
nomor halaman.</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-all-jurusan" data-component="query"  hidden>
<br>
jumlah item per halaman.</p>
</form>


## View Jurusan

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/jurusan/5/view"
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
    "data": {
        "id": null,
        "universitas_id": null,
        "nama": null,
        "kode": null
    }
}
```
<div id="execution-results-POSTadmin-jurusan--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-jurusan--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-jurusan--id--view"></code></pre>
</div>
<div id="execution-error-POSTadmin-jurusan--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-jurusan--id--view"></code></pre>
</div>
<form id="form-POSTadmin-jurusan--id--view" data-method="POST" data-path="admin/jurusan/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-jurusan--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-jurusan--id--view" onclick="tryItOut('POSTadmin-jurusan--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-jurusan--id--view" onclick="cancelTryOut('POSTadmin-jurusan--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-jurusan--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/jurusan/{id}/view</code></b>
</p>
<p>
<label id="auth-POSTadmin-jurusan--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-jurusan--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-jurusan--id--view" data-component="url" required  hidden>
<br>
ID jurusan</p>
</form>


## Create jurusan
untuk create jurusan

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/jurusan/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "kode": "eum",
    "universitas_id": 16,
    "nama": "facere"
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
        "id": 5,
        "kode": "KLI",
        "nama": "asdf",
        "dataUniversitas": {
            "id": 1,
            "nama": "Universitas Gajah Mada"
        }
    }
}


// respon validasi error
{
    "status": "failed",
    "message": "data gagal disimpan!",
    "data": {
        "errors": {
            "id": [
                "Kode Jurusan sudah digunakan!"
            ]
        }
    }
}
```
<div id="execution-results-POSTadmin-jurusan-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-jurusan-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-jurusan-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-jurusan-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-jurusan-create"></code></pre>
</div>
<form id="form-POSTadmin-jurusan-create" data-method="POST" data-path="admin/jurusan/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-jurusan-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-jurusan-create" onclick="tryItOut('POSTadmin-jurusan-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-jurusan-create" onclick="cancelTryOut('POSTadmin-jurusan-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-jurusan-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/jurusan/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-jurusan-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-jurusan-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>kode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kode" data-endpoint="POSTadmin-jurusan-create" data-component="body" required  hidden>
<br>
kode jurusan</p>
<p>
<b><code>universitas_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="universitas_id" data-endpoint="POSTadmin-jurusan-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-jurusan-create" data-component="body" required  hidden>
<br>
</p>

</form>


## Update jurusan
untuk update jurusan

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/jurusan/1/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "kode": "blanditiis",
    "universitas_id": 11,
    "nama": "similique"
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
        "id": 5,
        "kode": "KLI",
        "nama": "asdf",
        "dataUniversitas": {
            "id": 1,
            "nama": "Universitas Gajah Mada"
        }
    }
}


// respon validasi error
{
    "status": "failed",
    "message": "data gagal disimpan!",
    "data": {
        "errors": {
            "id": [
                "Kode Jurusan sudah digunakan!"
            ]
        }
    }
}
```
<div id="execution-results-POSTadmin-jurusan--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-jurusan--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-jurusan--id--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-jurusan--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-jurusan--id--update"></code></pre>
</div>
<form id="form-POSTadmin-jurusan--id--update" data-method="POST" data-path="admin/jurusan/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-jurusan--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-jurusan--id--update" onclick="tryItOut('POSTadmin-jurusan--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-jurusan--id--update" onclick="cancelTryOut('POSTadmin-jurusan--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-jurusan--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/jurusan/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-jurusan--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-jurusan--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-jurusan--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>kode</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kode" data-endpoint="POSTadmin-jurusan--id--update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>universitas_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="universitas_id" data-endpoint="POSTadmin-jurusan--id--update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-jurusan--id--update" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete Jurusan
untuk delete jurusan

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/jurusan/4/delete"
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
"status":"success",
"message":"jurusan berhasil dihapus",
}
```
<div id="execution-results-POSTadmin-jurusan--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-jurusan--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-jurusan--id--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-jurusan--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-jurusan--id--delete"></code></pre>
</div>
<form id="form-POSTadmin-jurusan--id--delete" data-method="POST" data-path="admin/jurusan/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-jurusan--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-jurusan--id--delete" onclick="tryItOut('POSTadmin-jurusan--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-jurusan--id--delete" onclick="cancelTryOut('POSTadmin-jurusan--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-jurusan--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/jurusan/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-jurusan--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-jurusan--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-jurusan--id--delete" data-component="url" required  hidden>
<br>
id jurusan</p>
</form>



