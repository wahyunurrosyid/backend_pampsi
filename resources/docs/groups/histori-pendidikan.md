# Histori Pendidikan


## List Histori Pendidikan
list histori pendidikan tanpa pagging

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/histori-pendidikan/9/list"
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
            "tingkat": "S1",
            "namaLembagaPendidikan": "",
            "tahunLulus": 0
        }
    ]
}
```
<div id="execution-results-GETuser-histori-pendidikan--id--list" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-histori-pendidikan--id--list"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-histori-pendidikan--id--list"></code></pre>
</div>
<div id="execution-error-GETuser-histori-pendidikan--id--list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-histori-pendidikan--id--list"></code></pre>
</div>
<form id="form-GETuser-histori-pendidikan--id--list" data-method="GET" data-path="user/histori-pendidikan/{id}/list" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-histori-pendidikan--id--list', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-histori-pendidikan--id--list" onclick="tryItOut('GETuser-histori-pendidikan--id--list');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-histori-pendidikan--id--list" onclick="cancelTryOut('GETuser-histori-pendidikan--id--list');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-histori-pendidikan--id--list" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/histori-pendidikan/{id}/list</code></b>
</p>
<p>
<label id="auth-GETuser-histori-pendidikan--id--list" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-histori-pendidikan--id--list" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-histori-pendidikan--id--list" data-component="url" required  hidden>
<br>
</p>
</form>


## create histori pendidikan
untuk create histori pendidikan

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/histori-pendidikan/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tingkat": "pariatur",
    "nama_lembaga_pendidikan": "inventore",
    "tahun_lulus": 4
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
    "message": "Berhasil tambah histori",
    "data": "data"
}
```
<div id="execution-results-POSTuser-histori-pendidikan-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-histori-pendidikan-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-histori-pendidikan-create"></code></pre>
</div>
<div id="execution-error-POSTuser-histori-pendidikan-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-histori-pendidikan-create"></code></pre>
</div>
<form id="form-POSTuser-histori-pendidikan-create" data-method="POST" data-path="user/histori-pendidikan/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-histori-pendidikan-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-histori-pendidikan-create" onclick="tryItOut('POSTuser-histori-pendidikan-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-histori-pendidikan-create" onclick="cancelTryOut('POSTuser-histori-pendidikan-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-histori-pendidikan-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/histori-pendidikan/create</code></b>
</p>
<p>
<label id="auth-POSTuser-histori-pendidikan-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-histori-pendidikan-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>tingkat</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tingkat" data-endpoint="POSTuser-histori-pendidikan-create" data-component="body"  hidden>
<br>
enum required 'SD','SMP','SMA','S1','S2','S3'</p>
<p>
<b><code>nama_lembaga_pendidikan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_lembaga_pendidikan" data-endpoint="POSTuser-histori-pendidikan-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tahun_lulus</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tahun_lulus" data-endpoint="POSTuser-histori-pendidikan-create" data-component="body" required  hidden>
<br>
</p>

</form>


## update histori pendidikan
untuk create histori pendidikan

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/histori-pendidikan/culpa/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "tingkat": "omnis",
    "nama_lembaga_pendidikan": "ad",
    "tahun_lulus": 2
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
    "message": "Berhasil update histori",
    "data": "data"
}
```
<div id="execution-results-POSTuser-histori-pendidikan--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-histori-pendidikan--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-histori-pendidikan--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-histori-pendidikan--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-histori-pendidikan--id--update"></code></pre>
</div>
<form id="form-POSTuser-histori-pendidikan--id--update" data-method="POST" data-path="user/histori-pendidikan/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-histori-pendidikan--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-histori-pendidikan--id--update" onclick="tryItOut('POSTuser-histori-pendidikan--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-histori-pendidikan--id--update" onclick="cancelTryOut('POSTuser-histori-pendidikan--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-histori-pendidikan--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/histori-pendidikan/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-histori-pendidikan--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-histori-pendidikan--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTuser-histori-pendidikan--id--update" data-component="url" required  hidden>
<br>
id histori</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>tingkat</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tingkat" data-endpoint="POSTuser-histori-pendidikan--id--update" data-component="body"  hidden>
<br>
enum required 'SD','SMP','SMA','S1','S2','S3'</p>
<p>
<b><code>nama_lembaga_pendidikan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_lembaga_pendidikan" data-endpoint="POSTuser-histori-pendidikan--id--update" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tahun_lulus</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="tahun_lulus" data-endpoint="POSTuser-histori-pendidikan--id--update" data-component="body" required  hidden>
<br>
</p>

</form>


## delete histori pendidikan
untuk hapus histori pendidikan

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/histori-pendidikan/velit/delete"
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
    "message": "Berhasil hapus histori",
    "data": "data"
}
```
<div id="execution-results-POSTuser-histori-pendidikan--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-histori-pendidikan--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-histori-pendidikan--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-histori-pendidikan--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-histori-pendidikan--id--delete"></code></pre>
</div>
<form id="form-POSTuser-histori-pendidikan--id--delete" data-method="POST" data-path="user/histori-pendidikan/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-histori-pendidikan--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-histori-pendidikan--id--delete" onclick="tryItOut('POSTuser-histori-pendidikan--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-histori-pendidikan--id--delete" onclick="cancelTryOut('POSTuser-histori-pendidikan--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-histori-pendidikan--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/histori-pendidikan/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-histori-pendidikan--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-histori-pendidikan--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTuser-histori-pendidikan--id--delete" data-component="url" required  hidden>
<br>
id histori</p>
</form>



