# Kota


## DataProvider Kota
daftar collection kota dengan pagging

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/all-kota"
);

let params = {
    "fields[kota]": "nesciunt",
    "filter[nama_kota]": "cupiditate",
    "filter[kode_kota]": "dolore",
    "filter[provinsi_id]": "ut",
    "sort": "similique",
    "page[number]": "7",
    "page[size]": "16",
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
            "nama_kota": "Kab. Simeulue",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Singkil",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Selatan",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Tenggara",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Timur",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Tengah",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Barat",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Besar",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Pidie",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Bireuen",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Utara",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Barat Daya",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Gayo Lues",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Tamiang",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Nagan Raya",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Jaya",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Bener Meriah",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Pidie Jaya",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Banda Aceh",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Sabang",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Langsa",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Lhokseumawe",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Subulussalam",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Nias",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Mandailing Natal",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Tapanuli Selatan",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Tapanuli Tengah",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Tapanuli Utara",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Toba Samosir",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Labuhan Batu",
            "kode_kota": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/general\/all-kota?fields%5Bkota%5D=nama_kota%2Ckode_kota&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/general\/all-kota?fields%5Bkota%5D=nama_kota%2Ckode_kota&page%5Bnumber%5D=17",
        "prev": null,
        "next": "http:\/\/localhost:8000\/general\/all-kota?fields%5Bkota%5D=nama_kota%2Ckode_kota&page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 17,
        "path": "http:\/\/localhost:8000\/general\/all-kota",
        "per_page": 30,
        "to": 30,
        "total": 499
    }
}
```
<div id="execution-results-GETadmin-all-kota" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-all-kota"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-all-kota"></code></pre>
</div>
<div id="execution-error-GETadmin-all-kota" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-all-kota"></code></pre>
</div>
<form id="form-GETadmin-all-kota" data-method="GET" data-path="admin/all-kota" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-all-kota', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-all-kota" onclick="tryItOut('GETadmin-all-kota');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-all-kota" onclick="cancelTryOut('GETadmin-all-kota');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-all-kota" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/all-kota</code></b>
</p>
<p>
<label id="auth-GETadmin-all-kota" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-all-kota" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[kota]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[kota]" data-endpoint="GETadmin-all-kota" data-component="query"  hidden>
<br>
select kolom 'provinsi_id','nama_kota','kode_kota'</p>
<p>
<b><code>filter[nama_kota]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_kota]" data-endpoint="GETadmin-all-kota" data-component="query"  hidden>
<br>
Filter by nama kota.</p>
<p>
<b><code>filter[kode_kota]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kode_kota]" data-endpoint="GETadmin-all-kota" data-component="query"  hidden>
<br>
Filter by kode kota.</p>
<p>
<b><code>filter[provinsi_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[provinsi_id]" data-endpoint="GETadmin-all-kota" data-component="query"  hidden>
<br>
Filter by provinsi id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-all-kota" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-all-kota" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-all-kota" data-component="query"  hidden>
<br>
oprional</p>
</form>


## View Kota

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/kota/6/view"
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
        "provinsi_id": null,
        "nama_kota": null,
        "kode_kota": null
    }
}
```
<div id="execution-results-POSTadmin-kota--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-kota--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-kota--id--view"></code></pre>
</div>
<div id="execution-error-POSTadmin-kota--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-kota--id--view"></code></pre>
</div>
<form id="form-POSTadmin-kota--id--view" data-method="POST" data-path="admin/kota/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-kota--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-kota--id--view" onclick="tryItOut('POSTadmin-kota--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-kota--id--view" onclick="cancelTryOut('POSTadmin-kota--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-kota--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/kota/{id}/view</code></b>
</p>
<p>
<label id="auth-POSTadmin-kota--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-kota--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-kota--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## List Kota by Provinsi
list kota by provinsi dengan paging

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/kota/provinsi/11"
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
            "id": 1101,
            "provinsi": "11",
            "namaKota": "KABUPATEN SIMEULUE",
            "kodeKota": null
        },
        {
            "id": 1102,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH SINGKIL",
            "kodeKota": null
        },
        {
            "id": 1103,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH SELATAN",
            "kodeKota": null
        },
        {
            "id": 1104,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH TENGGARA",
            "kodeKota": null
        },
        {
            "id": 1105,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH TIMUR",
            "kodeKota": null
        },
        {
            "id": 1106,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH TENGAH",
            "kodeKota": null
        },
        {
            "id": 1107,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH BARAT",
            "kodeKota": null
        },
        {
            "id": 1108,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH BESAR",
            "kodeKota": null
        },
        {
            "id": 1109,
            "provinsi": "11",
            "namaKota": "KABUPATEN PIDIE",
            "kodeKota": null
        },
        {
            "id": 1110,
            "provinsi": "11",
            "namaKota": "KABUPATEN BIREUEN",
            "kodeKota": null
        },
        {
            "id": 1111,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH UTARA",
            "kodeKota": null
        },
        {
            "id": 1112,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH BARAT DAYA",
            "kodeKota": null
        },
        {
            "id": 1113,
            "provinsi": "11",
            "namaKota": "KABUPATEN GAYO LUES",
            "kodeKota": null
        },
        {
            "id": 1114,
            "provinsi": "11",
            "namaKota": "KABUPATEN ACEH TAMIANG",
            "kodeKota": null
        },
        {
            "id": 1115,
            "provinsi": "11",
            "namaKota": "KABUPATEN NAGAN RAYA",
            "kodeKota": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/admin\/kota\/provinsi\/11?page=1",
        "last": "http:\/\/localhost:8000\/admin\/kota\/provinsi\/11?page=2",
        "prev": null,
        "next": "http:\/\/localhost:8000\/admin\/kota\/provinsi\/11?page=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 2,
        "path": "http:\/\/localhost:8000\/admin\/kota\/provinsi\/11",
        "per_page": 15,
        "to": 15,
        "total": 23
    }
}
```
<div id="execution-results-GETadmin-kota-provinsi--id-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-kota-provinsi--id-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-kota-provinsi--id-"></code></pre>
</div>
<div id="execution-error-GETadmin-kota-provinsi--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-kota-provinsi--id-"></code></pre>
</div>
<form id="form-GETadmin-kota-provinsi--id-" data-method="GET" data-path="admin/kota/provinsi/{id}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-kota-provinsi--id-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-kota-provinsi--id-" onclick="tryItOut('GETadmin-kota-provinsi--id-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-kota-provinsi--id-" onclick="cancelTryOut('GETadmin-kota-provinsi--id-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-kota-provinsi--id-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/kota/provinsi/{id}</code></b>
</p>
<p>
<label id="auth-GETadmin-kota-provinsi--id-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-kota-provinsi--id-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-kota-provinsi--id-" data-component="url" required  hidden>
<br>
id provinsi</p>
</form>


## Create Kota
untuk create kota

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/kota/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 15,
    "provinsi_id": 12,
    "nama_kota": "minima",
    "kode_kota": "sit"
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
        "provinsi": 11,
        "namaKota": "ANJAY",
        "kodeKota": "ANJAY1"
    }
}
```
<div id="execution-results-POSTadmin-kota-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-kota-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-kota-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-kota-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-kota-create"></code></pre>
</div>
<form id="form-POSTadmin-kota-create" data-method="POST" data-path="admin/kota/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-kota-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-kota-create" onclick="tryItOut('POSTadmin-kota-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-kota-create" onclick="cancelTryOut('POSTadmin-kota-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-kota-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/kota/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-kota-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-kota-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-kota-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>provinsi_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="provinsi_id" data-endpoint="POSTadmin-kota-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>nama_kota</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_kota" data-endpoint="POSTadmin-kota-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>kode_kota</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kode_kota" data-endpoint="POSTadmin-kota-create" data-component="body" required  hidden>
<br>
</p>

</form>


## Update Kota
untuk update kota

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/kota/quos/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "provinsi_id": 18,
    "nama_kota": "debitis",
    "kode_kota": "ut"
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
        "provinsi": 12,
        "namaKota": "ANJASjs",
        "kodeKota": "ANJASjs"
    }
}
```
<div id="execution-results-POSTadmin-kota--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-kota--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-kota--id--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-kota--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-kota--id--update"></code></pre>
</div>
<form id="form-POSTadmin-kota--id--update" data-method="POST" data-path="admin/kota/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-kota--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-kota--id--update" onclick="tryItOut('POSTadmin-kota--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-kota--id--update" onclick="cancelTryOut('POSTadmin-kota--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-kota--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/kota/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-kota--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-kota--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTadmin-kota--id--update" data-component="url" required  hidden>
<br>
id kota</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>provinsi_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="provinsi_id" data-endpoint="POSTadmin-kota--id--update" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nama_kota</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_kota" data-endpoint="POSTadmin-kota--id--update" data-component="body"  hidden>
<br>
unique</p>
<p>
<b><code>kode_kota</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="kode_kota" data-endpoint="POSTadmin-kota--id--update" data-component="body"  hidden>
<br>
unique</p>

</form>


## Delete Kota
untuk delete kota

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/kota/3/delete"
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
    "message": "Data Kota berhasil dihapus"
}
```
<div id="execution-results-POSTadmin-kota--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-kota--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-kota--id--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-kota--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-kota--id--delete"></code></pre>
</div>
<form id="form-POSTadmin-kota--id--delete" data-method="POST" data-path="admin/kota/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-kota--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-kota--id--delete" onclick="tryItOut('POSTadmin-kota--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-kota--id--delete" onclick="cancelTryOut('POSTadmin-kota--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-kota--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/kota/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-kota--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-kota--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-kota--id--delete" data-component="url" required  hidden>
<br>
id kota</p>
</form>



