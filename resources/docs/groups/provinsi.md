# Provinsi


## DataProvider Provinsi
daftar collection provinsi dengan pagging

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/all-provinsi"
);

let params = {
    "fields[provinsi]": "dicta",
    "filter[nama_provinsi]": "doloremque",
    "filter[kode_provinsi]": "ea",
    "filter[negara_id]": "id",
    "sort": "vel",
    "page[number]": "18",
    "page[size]": "13",
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
            "id": 11,
            "negaraId": null,
            "namaProvinsi": "ACEH",
            "kodeProvinsi": null
        },
        {
            "id": 12,
            "negaraId": null,
            "namaProvinsi": "SUMATERA UTARA",
            "kodeProvinsi": null
        },
        {
            "id": 13,
            "negaraId": null,
            "namaProvinsi": "SUMATERA BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 14,
            "negaraId": null,
            "namaProvinsi": "RIAU",
            "kodeProvinsi": null
        },
        {
            "id": 15,
            "negaraId": null,
            "namaProvinsi": "JAMBI",
            "kodeProvinsi": null
        },
        {
            "id": 16,
            "negaraId": null,
            "namaProvinsi": "SUMATERA SELATAN",
            "kodeProvinsi": null
        },
        {
            "id": 17,
            "negaraId": null,
            "namaProvinsi": "BENGKULU",
            "kodeProvinsi": null
        },
        {
            "id": 18,
            "negaraId": null,
            "namaProvinsi": "LAMPUNG",
            "kodeProvinsi": null
        },
        {
            "id": 19,
            "negaraId": null,
            "namaProvinsi": "KEPULAUAN BANGKA BELITUNG",
            "kodeProvinsi": null
        },
        {
            "id": 21,
            "negaraId": null,
            "namaProvinsi": "KEPULAUAN RIAU",
            "kodeProvinsi": null
        },
        {
            "id": 31,
            "negaraId": null,
            "namaProvinsi": "DKI JAKARTA",
            "kodeProvinsi": null
        },
        {
            "id": 32,
            "negaraId": null,
            "namaProvinsi": "JAWA BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 33,
            "negaraId": null,
            "namaProvinsi": "JAWA TENGAH",
            "kodeProvinsi": null
        },
        {
            "id": 34,
            "negaraId": null,
            "namaProvinsi": "DI YOGYAKARTA",
            "kodeProvinsi": null
        },
        {
            "id": 35,
            "negaraId": null,
            "namaProvinsi": "JAWA TIMUR",
            "kodeProvinsi": null
        },
        {
            "id": 36,
            "negaraId": null,
            "namaProvinsi": "BANTEN",
            "kodeProvinsi": null
        },
        {
            "id": 51,
            "negaraId": null,
            "namaProvinsi": "BALI",
            "kodeProvinsi": null
        },
        {
            "id": 52,
            "negaraId": null,
            "namaProvinsi": "NUSA TENGGARA BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 53,
            "negaraId": null,
            "namaProvinsi": "NUSA TENGGARA TIMUR",
            "kodeProvinsi": null
        },
        {
            "id": 61,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 62,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN TENGAH",
            "kodeProvinsi": null
        },
        {
            "id": 63,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN SELATAN",
            "kodeProvinsi": null
        },
        {
            "id": 64,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN TIMUR",
            "kodeProvinsi": null
        },
        {
            "id": 65,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN UTARA",
            "kodeProvinsi": null
        },
        {
            "id": 71,
            "negaraId": null,
            "namaProvinsi": "SULAWESI UTARA",
            "kodeProvinsi": null
        },
        {
            "id": 72,
            "negaraId": null,
            "namaProvinsi": "SULAWESI TENGAH",
            "kodeProvinsi": null
        },
        {
            "id": 73,
            "negaraId": null,
            "namaProvinsi": "SULAWESI SELATAN",
            "kodeProvinsi": null
        },
        {
            "id": 74,
            "negaraId": null,
            "namaProvinsi": "SULAWESI TENGGARA",
            "kodeProvinsi": null
        },
        {
            "id": 75,
            "negaraId": null,
            "namaProvinsi": "GORONTALO",
            "kodeProvinsi": null
        },
        {
            "id": 76,
            "negaraId": null,
            "namaProvinsi": "SULAWESI BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 81,
            "negaraId": null,
            "namaProvinsi": "MALUKU",
            "kodeProvinsi": null
        },
        {
            "id": 82,
            "negaraId": null,
            "namaProvinsi": "MALUKU UTARA",
            "kodeProvinsi": null
        },
        {
            "id": 91,
            "negaraId": null,
            "namaProvinsi": "PAPUA BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 94,
            "negaraId": null,
            "namaProvinsi": "PAPUA",
            "kodeProvinsi": null
        }
    ]
}
```
<div id="execution-results-GETadmin-all-provinsi" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-all-provinsi"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-all-provinsi"></code></pre>
</div>
<div id="execution-error-GETadmin-all-provinsi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-all-provinsi"></code></pre>
</div>
<form id="form-GETadmin-all-provinsi" data-method="GET" data-path="admin/all-provinsi" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-all-provinsi', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-all-provinsi" onclick="tryItOut('GETadmin-all-provinsi');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-all-provinsi" onclick="cancelTryOut('GETadmin-all-provinsi');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-all-provinsi" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/all-provinsi</code></b>
</p>
<p>
<label id="auth-GETadmin-all-provinsi" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-all-provinsi" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[provinsi]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[provinsi]" data-endpoint="GETadmin-all-provinsi" data-component="query"  hidden>
<br>
select kolom 'negara_id','nama_provinsi','kode_provinsi'</p>
<p>
<b><code>filter[nama_provinsi]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_provinsi]" data-endpoint="GETadmin-all-provinsi" data-component="query"  hidden>
<br>
Filter by nama provinsi.</p>
<p>
<b><code>filter[kode_provinsi]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kode_provinsi]" data-endpoint="GETadmin-all-provinsi" data-component="query"  hidden>
<br>
Filter by kode provinsi.</p>
<p>
<b><code>filter[negara_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[negara_id]" data-endpoint="GETadmin-all-provinsi" data-component="query"  hidden>
<br>
Filter by negara id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-all-provinsi" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-all-provinsi" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-all-provinsi" data-component="query"  hidden>
<br>
oprional</p>
</form>


## View Provinsi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/provinsi/18/view"
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
        "negara_id": null,
        "nama_provinsi": null,
        "kode_provinsi": null
    }
}
```
<div id="execution-results-POSTadmin-provinsi--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-provinsi--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-provinsi--id--view"></code></pre>
</div>
<div id="execution-error-POSTadmin-provinsi--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-provinsi--id--view"></code></pre>
</div>
<form id="form-POSTadmin-provinsi--id--view" data-method="POST" data-path="admin/provinsi/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-provinsi--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-provinsi--id--view" onclick="tryItOut('POSTadmin-provinsi--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-provinsi--id--view" onclick="cancelTryOut('POSTadmin-provinsi--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-provinsi--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/provinsi/{id}/view</code></b>
</p>
<p>
<label id="auth-POSTadmin-provinsi--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-provinsi--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-provinsi--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## List Provinsi by Negara
untuk list provinsi by negara

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/provinsi/negara/4"
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
    "data": [
        {
            "id": 11,
            "negaraId": "1",
            "namaProvinsi": "ACEH",
            "kodeProvinsi": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/admin\/provinsi\/negara\/1?page=1",
        "last": "http:\/\/localhost:8000\/admin\/provinsi\/negara\/1?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/admin\/provinsi\/negara\/1",
        "per_page": 15,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETadmin-provinsi-negara--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-provinsi-negara--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-provinsi-negara--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-provinsi-negara--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-provinsi-negara--id-"></code></pre>
</div>
<form id="form-GETadmin-provinsi-negara--id-" data-method="GET" data-path="admin/provinsi/negara/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-provinsi-negara--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-provinsi-negara--id-" onclick="tryItOut('GETadmin-provinsi-negara--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-provinsi-negara--id-" onclick="cancelTryOut('GETadmin-provinsi-negara--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-provinsi-negara--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/provinsi/negara/{id}</code></b>
</p>
<p>
<label id="auth-GETadmin-provinsi-negara--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-provinsi-negara--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-provinsi-negara--id-" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Provinsi
untuk create provinsi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/provinsi/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_provinsi": "expedita",
    "negara_id": 2,
    "kode_provinsi": "vitae"
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
    "message": "data berhasil disimpan!",
    "data": {
        "id": 0,
        "negaraId": "1",
        "namaProvinsi": "Hutan",
        "kodeProvinsi": "21e"
    }
}
```
<div id="execution-results-POSTadmin-provinsi-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-provinsi-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-provinsi-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-provinsi-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-provinsi-create"></code></pre>
</div>
<form id="form-POSTadmin-provinsi-create" data-method="POST" data-path="admin/provinsi/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-provinsi-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-provinsi-create" onclick="tryItOut('POSTadmin-provinsi-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-provinsi-create" onclick="cancelTryOut('POSTadmin-provinsi-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-provinsi-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/provinsi/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-provinsi-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-provinsi-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_provinsi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_provinsi" data-endpoint="POSTadmin-provinsi-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>negara_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="negara_id" data-endpoint="POSTadmin-provinsi-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>kode_provinsi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kode_provinsi" data-endpoint="POSTadmin-provinsi-create" data-component="body" required  hidden>
<br>
</p>

</form>


## Update Provinsi
untuk update provinsi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/provinsi/11/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_provinsi": "dignissimos",
    "negara_id": 5,
    "kode_provinsi": "quam"
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
    "message": "Kota berhasil diupdate",
    "data": {
        "id": 1,
        "negaraId": "1",
        "namaProvinsi": "butan",
        "kodeProvinsi": "21e"
    }
}
```
<div id="execution-results-POSTadmin-provinsi--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-provinsi--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-provinsi--id--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-provinsi--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-provinsi--id--update"></code></pre>
</div>
<form id="form-POSTadmin-provinsi--id--update" data-method="POST" data-path="admin/provinsi/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-provinsi--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-provinsi--id--update" onclick="tryItOut('POSTadmin-provinsi--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-provinsi--id--update" onclick="cancelTryOut('POSTadmin-provinsi--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-provinsi--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/provinsi/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-provinsi--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-provinsi--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-provinsi--id--update" data-component="url" required  hidden>
<br>
id provinsi</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_provinsi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_provinsi" data-endpoint="POSTadmin-provinsi--id--update" data-component="body"  hidden>
<br>
unique</p>
<p>
<b><code>negara_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="negara_id" data-endpoint="POSTadmin-provinsi--id--update" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>kode_provinsi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="kode_provinsi" data-endpoint="POSTadmin-provinsi--id--update" data-component="body"  hidden>
<br>
unique</p>

</form>


## Delete Provinsi
untuk delete provinsi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/provinsi/15/delete"
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
    "message": "Data Provinsi berhasil dihapus"
}
```
<div id="execution-results-POSTadmin-provinsi--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-provinsi--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-provinsi--id--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-provinsi--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-provinsi--id--delete"></code></pre>
</div>
<form id="form-POSTadmin-provinsi--id--delete" data-method="POST" data-path="admin/provinsi/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-provinsi--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-provinsi--id--delete" onclick="tryItOut('POSTadmin-provinsi--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-provinsi--id--delete" onclick="cancelTryOut('POSTadmin-provinsi--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-provinsi--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/provinsi/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-provinsi--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-provinsi--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-provinsi--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



