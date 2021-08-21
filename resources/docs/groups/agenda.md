# Agenda


## List Agenda
untuk list agenda

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda"
);

let params = {
    "fields[agenda]": "quia",
    "filter[nama_kategori]": "vel",
    "sort": "eum",
    "page[number]": "17",
    "page[size]": "5",
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
<div id="execution-results-GETadmin-agenda" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-agenda"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-agenda"></code></pre>
</div>
<div id="execution-error-GETadmin-agenda" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-agenda"></code></pre>
</div>
<form id="form-GETadmin-agenda" data-method="GET" data-path="admin/agenda" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-agenda', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-agenda" onclick="tryItOut('GETadmin-agenda');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-agenda" onclick="cancelTryOut('GETadmin-agenda');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-agenda" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/agenda</code></b>
</p>
<p>
<label id="auth-GETadmin-agenda" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-agenda" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[agenda]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[agenda]" data-endpoint="GETadmin-agenda" data-component="query"  hidden>
<br>
select kolom 'nama_kategori','judul','deskripsi','lokasi','start_date','end_date','fasilitas'
,'pemater','poster','visible'</p>
<p>
<b><code>filter[nama_kategori]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_kategori]" data-endpoint="GETadmin-agenda" data-component="query"  hidden>
<br>
Filter by nama nama_kategori.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-agenda" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-agenda" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-agenda" data-component="query"  hidden>
<br>
oprional</p>
</form>


## View Agenda
untuk view agenda

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/7/view"
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
    "data": {
        "id": null,
        "nama_kategori": null,
        "judul": null,
        "deskripsi": null,
        "lokasi": null,
        "start_date": null,
        "end_date": null,
        "fasilitas": null,
        "pemateri": null,
        "poster": null
    }
}
```
<div id="execution-results-GETadmin-agenda--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-agenda--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-agenda--id--view"></code></pre>
</div>
<div id="execution-error-GETadmin-agenda--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-agenda--id--view"></code></pre>
</div>
<form id="form-GETadmin-agenda--id--view" data-method="GET" data-path="admin/agenda/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-agenda--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-agenda--id--view" onclick="tryItOut('GETadmin-agenda--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-agenda--id--view" onclick="cancelTryOut('GETadmin-agenda--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-agenda--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/agenda/{id}/view</code></b>
</p>
<p>
<label id="auth-GETadmin-agenda--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-agenda--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-agenda--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Agenda
untuk create agenda

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('nama_kategori', 'amet');
body.append('judul', 'numquam');
body.append('deskripsi', 'et');
body.append('lokasi', 'doloribus');
body.append('start_date', 'consequatur');
body.append('end_date', 'tenetur');
body.append('fasilitas', 'enim');
body.append('pemateri', 'aut');
body.append('objPoster', document.querySelector('input[name="objPoster"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": {
        "id": null,
        "nama_kategori": null,
        "judul": null,
        "deskripsi": null,
        "lokasi": null,
        "start_date": null,
        "end_date": null,
        "fasilitas": null,
        "pemateri": null,
        "poster": null
    }
}
```
<div id="execution-results-POSTadmin-agenda-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-agenda-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-agenda-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-agenda-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-agenda-create"></code></pre>
</div>
<form id="form-POSTadmin-agenda-create" data-method="POST" data-path="admin/agenda/create" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-agenda-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-agenda-create" onclick="tryItOut('POSTadmin-agenda-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-agenda-create" onclick="cancelTryOut('POSTadmin-agenda-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-agenda-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/agenda/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-agenda-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-agenda-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTadmin-agenda-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="judul" data-endpoint="POSTadmin-agenda-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>text</small>     <i>optional</i> &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTadmin-agenda-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="lokasi" data-endpoint="POSTadmin-agenda-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>dateTime</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTadmin-agenda-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>dateTime</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTadmin-agenda-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>fasilitas</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fasilitas" data-endpoint="POSTadmin-agenda-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>pemateri</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pemateri" data-endpoint="POSTadmin-agenda-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>objPoster</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="objPoster" data-endpoint="POSTadmin-agenda-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## Update Agenda
untuk update agenda

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/et/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('nama_kategori', 'quis');
body.append('judul', 'et');
body.append('deskripsi', 'quo');
body.append('lokasi', 'dolorem');
body.append('start_date', 'occaecati');
body.append('end_date', 'ex');
body.append('fasilitas', 'labore');
body.append('pemateri', 'corrupti');
body.append('objPoster', document.querySelector('input[name="objPoster"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": {
        "id": null,
        "nama_kategori": null,
        "judul": null,
        "deskripsi": null,
        "lokasi": null,
        "start_date": null,
        "end_date": null,
        "fasilitas": null,
        "pemateri": null,
        "poster": null
    }
}
```
<div id="execution-results-POSTadmin-agenda--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-agenda--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-agenda--id--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-agenda--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-agenda--id--update"></code></pre>
</div>
<form id="form-POSTadmin-agenda--id--update" data-method="POST" data-path="admin/agenda/{id}/update" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-agenda--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-agenda--id--update" onclick="tryItOut('POSTadmin-agenda--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-agenda--id--update" onclick="cancelTryOut('POSTadmin-agenda--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-agenda--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/agenda/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-agenda--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-agenda--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTadmin-agenda--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="judul" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>text</small>     <i>optional</i> &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lokasi" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>dateTime</small>     <i>optional</i> &nbsp;
<input type="text" name="start_date" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>dateTime</small>     <i>optional</i> &nbsp;
<input type="text" name="end_date" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>fasilitas</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fasilitas" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>pemateri</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="pemateri" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>objPoster</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="objPoster" data-endpoint="POSTadmin-agenda--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Agenda
untuk hapus agenda

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/4/delete"
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


<div id="execution-results-POSTadmin-agenda--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-agenda--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-agenda--id--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-agenda--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-agenda--id--delete"></code></pre>
</div>
<form id="form-POSTadmin-agenda--id--delete" data-method="POST" data-path="admin/agenda/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-agenda--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-agenda--id--delete" onclick="tryItOut('POSTadmin-agenda--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-agenda--id--delete" onclick="cancelTryOut('POSTadmin-agenda--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-agenda--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/agenda/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-agenda--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-agenda--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-agenda--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## daftar agenda

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/5/psikolog/aut"
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
<div id="execution-results-GETadmin-agenda--id--psikolog--idPsikolog-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-agenda--id--psikolog--idPsikolog-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-agenda--id--psikolog--idPsikolog-"></code></pre>
</div>
<div id="execution-error-GETadmin-agenda--id--psikolog--idPsikolog-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-agenda--id--psikolog--idPsikolog-"></code></pre>
</div>
<form id="form-GETadmin-agenda--id--psikolog--idPsikolog-" data-method="GET" data-path="admin/agenda/{id}/psikolog/{idPsikolog}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-agenda--id--psikolog--idPsikolog-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-agenda--id--psikolog--idPsikolog-" onclick="tryItOut('GETadmin-agenda--id--psikolog--idPsikolog-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-agenda--id--psikolog--idPsikolog-" onclick="cancelTryOut('GETadmin-agenda--id--psikolog--idPsikolog-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-agenda--id--psikolog--idPsikolog-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/agenda/{id}/psikolog/{idPsikolog}</code></b>
</p>
<p>
<label id="auth-GETadmin-agenda--id--psikolog--idPsikolog-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-agenda--id--psikolog--idPsikolog-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-agenda--id--psikolog--idPsikolog-" data-component="url"  hidden>
<br>
id agenda</p>
<p>
<b><code>idPsikolog</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="idPsikolog" data-endpoint="GETadmin-agenda--id--psikolog--idPsikolog-" data-component="url" required  hidden>
<br>
</p>
</form>


## data participant agenda

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/5/participant"
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
<div id="execution-results-GETadmin-agenda--id--participant" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-agenda--id--participant"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-agenda--id--participant"></code></pre>
</div>
<div id="execution-error-GETadmin-agenda--id--participant" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-agenda--id--participant"></code></pre>
</div>
<form id="form-GETadmin-agenda--id--participant" data-method="GET" data-path="admin/agenda/{id}/participant" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-agenda--id--participant', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-agenda--id--participant" onclick="tryItOut('GETadmin-agenda--id--participant');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-agenda--id--participant" onclick="cancelTryOut('GETadmin-agenda--id--participant');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-agenda--id--participant" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/agenda/{id}/participant</code></b>
</p>
<p>
<label id="auth-GETadmin-agenda--id--participant" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-agenda--id--participant" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-agenda--id--participant" data-component="url"  hidden>
<br>
id agenda</p>
</form>


## Create Agenda Dokumentasi
untuk create agenda dokumentasi




> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/dokumentasi"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "agenda_id": 14,
    "objFile": "consequuntur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTadmin-agenda-dokumentasi" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-agenda-dokumentasi"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-agenda-dokumentasi"></code></pre>
</div>
<div id="execution-error-POSTadmin-agenda-dokumentasi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-agenda-dokumentasi"></code></pre>
</div>
<form id="form-POSTadmin-agenda-dokumentasi" data-method="POST" data-path="admin/agenda/dokumentasi" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-agenda-dokumentasi', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-agenda-dokumentasi" onclick="tryItOut('POSTadmin-agenda-dokumentasi');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-agenda-dokumentasi" onclick="cancelTryOut('POSTadmin-agenda-dokumentasi');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-agenda-dokumentasi" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/agenda/dokumentasi</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>agenda_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="agenda_id" data-endpoint="POSTadmin-agenda-dokumentasi" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>objFile</code></b>&nbsp;&nbsp;<small>image</small>     <i>optional</i> &nbsp;
<input type="text" name="objFile" data-endpoint="POSTadmin-agenda-dokumentasi" data-component="body"  hidden>
<br>
</p>

</form>


## List Agenda Dokumentasi




> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/20/dokumentasi/list"
);

let params = {
    "sort": "quod",
    "page[number]": "2",
    "page[size]": "17",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
    "data": [
        {
            "id": null,
            "agenda_id": null,
            "file": null,
            "judul": null,
            "start_date": null,
            "lokasi": null
        }
    ]
}
```
<div id="execution-results-GETadmin-agenda--id--dokumentasi-list" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-agenda--id--dokumentasi-list"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-agenda--id--dokumentasi-list"></code></pre>
</div>
<div id="execution-error-GETadmin-agenda--id--dokumentasi-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-agenda--id--dokumentasi-list"></code></pre>
</div>
<form id="form-GETadmin-agenda--id--dokumentasi-list" data-method="GET" data-path="admin/agenda/{id}/dokumentasi/list" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-agenda--id--dokumentasi-list', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-agenda--id--dokumentasi-list" onclick="tryItOut('GETadmin-agenda--id--dokumentasi-list');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-agenda--id--dokumentasi-list" onclick="cancelTryOut('GETadmin-agenda--id--dokumentasi-list');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-agenda--id--dokumentasi-list" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/agenda/{id}/dokumentasi/list</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-agenda--id--dokumentasi-list" data-component="url"  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-agenda--id--dokumentasi-list" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-agenda--id--dokumentasi-list" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-agenda--id--dokumentasi-list" data-component="query"  hidden>
<br>
oprional</p>
</form>


## Delete Agenda Dokumentasi




> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/agenda/dokumentasi/16/delete"
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


> Example response (401):

```json

Unauthorized.
```
<div id="execution-results-GETadmin-agenda-dokumentasi--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-agenda-dokumentasi--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-agenda-dokumentasi--id--delete"></code></pre>
</div>
<div id="execution-error-GETadmin-agenda-dokumentasi--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-agenda-dokumentasi--id--delete"></code></pre>
</div>
<form id="form-GETadmin-agenda-dokumentasi--id--delete" data-method="GET" data-path="admin/agenda/dokumentasi/{id}/delete" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-agenda-dokumentasi--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-agenda-dokumentasi--id--delete" onclick="tryItOut('GETadmin-agenda-dokumentasi--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-agenda-dokumentasi--id--delete" onclick="cancelTryOut('GETadmin-agenda-dokumentasi--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-agenda-dokumentasi--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/agenda/dokumentasi/{id}/delete</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="GETadmin-agenda-dokumentasi--id--delete" data-component="url"  hidden>
<br>
</p>
</form>



