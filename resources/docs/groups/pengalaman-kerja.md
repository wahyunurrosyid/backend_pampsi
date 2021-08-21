# Pengalaman Kerja


## List Pengalaman Kerja
list pengalaman tanpa pagging

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/pengalaman-kerja/5/view"
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
            "id": 1,
            "idUser": 1,
            "namaPerusahaan": "pt indonesia",
            "posisiJabatan": "",
            "periode": "",
            "keterangan": null
        }
    ]
}
```
<div id="execution-results-GETuser-pengalaman-kerja--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-pengalaman-kerja--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-pengalaman-kerja--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-pengalaman-kerja--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-pengalaman-kerja--id--view"></code></pre>
</div>
<form id="form-GETuser-pengalaman-kerja--id--view" data-method="GET" data-path="user/pengalaman-kerja/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-pengalaman-kerja--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-pengalaman-kerja--id--view" onclick="tryItOut('GETuser-pengalaman-kerja--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-pengalaman-kerja--id--view" onclick="cancelTryOut('GETuser-pengalaman-kerja--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-pengalaman-kerja--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/pengalaman-kerja/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-pengalaman-kerja--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-pengalaman-kerja--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-pengalaman-kerja--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## create pengalaman Kerja
untuk create pengalaman

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/pengalaman-kerja/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_perusahaan": "eligendi",
    "posisi_jabatan": "eveniet",
    "periode": 9
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
    "message": "Berhasil tambah pengalaman",
    "data": "data"
}
```
<div id="execution-results-POSTuser-pengalaman-kerja-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-pengalaman-kerja-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-pengalaman-kerja-create"></code></pre>
</div>
<div id="execution-error-POSTuser-pengalaman-kerja-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-pengalaman-kerja-create"></code></pre>
</div>
<form id="form-POSTuser-pengalaman-kerja-create" data-method="POST" data-path="user/pengalaman-kerja/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-pengalaman-kerja-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-pengalaman-kerja-create" onclick="tryItOut('POSTuser-pengalaman-kerja-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-pengalaman-kerja-create" onclick="cancelTryOut('POSTuser-pengalaman-kerja-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-pengalaman-kerja-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/pengalaman-kerja/create</code></b>
</p>
<p>
<label id="auth-POSTuser-pengalaman-kerja-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-pengalaman-kerja-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_perusahaan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_perusahaan" data-endpoint="POSTuser-pengalaman-kerja-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>posisi_jabatan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="posisi_jabatan" data-endpoint="POSTuser-pengalaman-kerja-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>periode</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="periode" data-endpoint="POSTuser-pengalaman-kerja-create" data-component="body" required  hidden>
<br>
</p>

</form>


## update pengalaman Kerja
untuk update pengalaman

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/pengalaman-kerja/consequuntur/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_perusahaan": "non",
    "posisi_jabatan": "deserunt",
    "periode": 16
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
    "message": "Berhasil update pengalaman",
    "data": "data"
}
```
<div id="execution-results-POSTuser-pengalaman-kerja--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-pengalaman-kerja--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-pengalaman-kerja--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-pengalaman-kerja--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-pengalaman-kerja--id--update"></code></pre>
</div>
<form id="form-POSTuser-pengalaman-kerja--id--update" data-method="POST" data-path="user/pengalaman-kerja/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-pengalaman-kerja--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-pengalaman-kerja--id--update" onclick="tryItOut('POSTuser-pengalaman-kerja--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-pengalaman-kerja--id--update" onclick="cancelTryOut('POSTuser-pengalaman-kerja--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-pengalaman-kerja--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/pengalaman-kerja/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-pengalaman-kerja--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-pengalaman-kerja--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTuser-pengalaman-kerja--id--update" data-component="url" required  hidden>
<br>
id user</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_perusahaan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_perusahaan" data-endpoint="POSTuser-pengalaman-kerja--id--update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>posisi_jabatan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="posisi_jabatan" data-endpoint="POSTuser-pengalaman-kerja--id--update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>periode</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="periode" data-endpoint="POSTuser-pengalaman-kerja--id--update" data-component="body" required  hidden>
<br>
</p>

</form>


## delete pengalaman Kerja
untuk hapus pengalaman

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/pengalaman-kerja/illo/delete"
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
    "status": "success\/failed",
    "message": "Berhasil hapus pengalaman",
    "data": "data"
}
```
<div id="execution-results-POSTuser-pengalaman-kerja--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-pengalaman-kerja--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-pengalaman-kerja--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-pengalaman-kerja--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-pengalaman-kerja--id--delete"></code></pre>
</div>
<form id="form-POSTuser-pengalaman-kerja--id--delete" data-method="POST" data-path="user/pengalaman-kerja/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-pengalaman-kerja--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-pengalaman-kerja--id--delete" onclick="tryItOut('POSTuser-pengalaman-kerja--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-pengalaman-kerja--id--delete" onclick="cancelTryOut('POSTuser-pengalaman-kerja--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-pengalaman-kerja--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/pengalaman-kerja/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-pengalaman-kerja--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-pengalaman-kerja--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTuser-pengalaman-kerja--id--delete" data-component="url" required  hidden>
<br>
id pengalaman</p>
</form>



