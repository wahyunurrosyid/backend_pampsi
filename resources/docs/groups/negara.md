# Negara


## DataProvider Negara
daftar collection negara dengan pagging

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/all-negara"
);

let params = {
    "fields[negara]": "enim",
    "filter[nama_negara]": "tenetur",
    "filter[kode_negara]": "sint",
    "sort": "dicta",
    "page[number]": "10",
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


> Example response (200):

```json
{
    "data": [
        {
            "nama_negara": "Indonesia"
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/general\/all-negara?fields%5Bnegara%5D=nama_negara&filter%5Bnama_negara%5D=&sort=&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/general\/all-negara?fields%5Bnegara%5D=nama_negara&filter%5Bnama_negara%5D=&sort=&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/general\/all-negara",
        "per_page": 30,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETadmin-all-negara" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-all-negara"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-all-negara"></code></pre>
</div>
<div id="execution-error-GETadmin-all-negara" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-all-negara"></code></pre>
</div>
<form id="form-GETadmin-all-negara" data-method="GET" data-path="admin/all-negara" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-all-negara', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-all-negara" onclick="tryItOut('GETadmin-all-negara');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-all-negara" onclick="cancelTryOut('GETadmin-all-negara');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-all-negara" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/all-negara</code></b>
</p>
<p>
<label id="auth-GETadmin-all-negara" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-all-negara" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[negara]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[negara]" data-endpoint="GETadmin-all-negara" data-component="query"  hidden>
<br>
select kolom 'nama_negara','kode_negara'</p>
<p>
<b><code>filter[nama_negara]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_negara]" data-endpoint="GETadmin-all-negara" data-component="query"  hidden>
<br>
Filter by nama negara.</p>
<p>
<b><code>filter[kode_negara]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kode_negara]" data-endpoint="GETadmin-all-negara" data-component="query"  hidden>
<br>
Filter by nama negara.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-all-negara" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-all-negara" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-all-negara" data-component="query"  hidden>
<br>
oprional</p>
</form>


## View Negara

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/negara/9/view"
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
        "nama_negara": null,
        "kode_negara": null
    }
}
```
<div id="execution-results-POSTadmin-negara--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-negara--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-negara--id--view"></code></pre>
</div>
<div id="execution-error-POSTadmin-negara--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-negara--id--view"></code></pre>
</div>
<form id="form-POSTadmin-negara--id--view" data-method="POST" data-path="admin/negara/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-negara--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-negara--id--view" onclick="tryItOut('POSTadmin-negara--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-negara--id--view" onclick="cancelTryOut('POSTadmin-negara--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-negara--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/negara/{id}/view</code></b>
</p>
<p>
<label id="auth-POSTadmin-negara--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-negara--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-negara--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Negara
untuk create negara

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/negara/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_negara": "vero",
    "kode_negara": "nihil"
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
        "id": 196,
        "namaNegara": "titan",
        "kodeNegara": "titan1"
    }
}
```
<div id="execution-results-POSTadmin-negara-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-negara-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-negara-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-negara-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-negara-create"></code></pre>
</div>
<form id="form-POSTadmin-negara-create" data-method="POST" data-path="admin/negara/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-negara-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-negara-create" onclick="tryItOut('POSTadmin-negara-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-negara-create" onclick="cancelTryOut('POSTadmin-negara-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-negara-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/negara/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-negara-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-negara-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_negara</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_negara" data-endpoint="POSTadmin-negara-create" data-component="body" required  hidden>
<br>
unique</p>
<p>
<b><code>kode_negara</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kode_negara" data-endpoint="POSTadmin-negara-create" data-component="body" required  hidden>
<br>
unique</p>

</form>


## Update Negara
untuk update negara

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/negara/8/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_negara": "minus",
    "kode_negara": "reprehenderit"
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
    "message": "Negara berhasil diupdate",
    "data": {
        "id": 1,
        "namaNegara": "titan2",
        "kodeNegara": "titan2"
    }
}
```
<div id="execution-results-POSTadmin-negara--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-negara--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-negara--id--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-negara--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-negara--id--update"></code></pre>
</div>
<form id="form-POSTadmin-negara--id--update" data-method="POST" data-path="admin/negara/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-negara--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-negara--id--update" onclick="tryItOut('POSTadmin-negara--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-negara--id--update" onclick="cancelTryOut('POSTadmin-negara--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-negara--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/negara/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-negara--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-negara--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-negara--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_negara</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_negara" data-endpoint="POSTadmin-negara--id--update" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>kode_negara</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="kode_negara" data-endpoint="POSTadmin-negara--id--update" data-component="body"  hidden>
<br>
unique</p>

</form>


## Delete Negara
untuk delete negara

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/negara/20/delete"
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
    "message": "Data Negara berhasil dihapus"
}
```
<div id="execution-results-POSTadmin-negara--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-negara--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-negara--id--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-negara--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-negara--id--delete"></code></pre>
</div>
<form id="form-POSTadmin-negara--id--delete" data-method="POST" data-path="admin/negara/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-negara--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-negara--id--delete" onclick="tryItOut('POSTadmin-negara--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-negara--id--delete" onclick="cancelTryOut('POSTadmin-negara--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-negara--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/negara/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-negara--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-negara--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-negara--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



