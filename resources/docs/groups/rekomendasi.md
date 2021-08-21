# Rekomendasi


## List Rekomendasi
untuk list rekomendasi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/rekomendasi/20/list"
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
            "id": null,
            "penerimaRekomendasi": null,
            "pemberiRekomendasi": null,
            "catatan": null
        }
    ]
}
```
<div id="execution-results-GETuser-rekomendasi--id--list" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-rekomendasi--id--list"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-rekomendasi--id--list"></code></pre>
</div>
<div id="execution-error-GETuser-rekomendasi--id--list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-rekomendasi--id--list"></code></pre>
</div>
<form id="form-GETuser-rekomendasi--id--list" data-method="GET" data-path="user/rekomendasi/{id}/list" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-rekomendasi--id--list', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-rekomendasi--id--list" onclick="tryItOut('GETuser-rekomendasi--id--list');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-rekomendasi--id--list" onclick="cancelTryOut('GETuser-rekomendasi--id--list');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-rekomendasi--id--list" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/rekomendasi/{id}/list</code></b>
</p>
<p>
<label id="auth-GETuser-rekomendasi--id--list" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-rekomendasi--id--list" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-rekomendasi--id--list" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Rekomendasi
untuk create rekomendasi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/rekomendasi/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "penerima_rekomendasi": 5,
    "catatan": "rerum"
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
    "data": {
        "id": null,
        "penerimaRekomendasi": null,
        "pemberiRekomendasi": null,
        "catatan": null
    }
}
```
<div id="execution-results-POSTuser-rekomendasi-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-rekomendasi-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-rekomendasi-create"></code></pre>
</div>
<div id="execution-error-POSTuser-rekomendasi-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-rekomendasi-create"></code></pre>
</div>
<form id="form-POSTuser-rekomendasi-create" data-method="POST" data-path="user/rekomendasi/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-rekomendasi-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-rekomendasi-create" onclick="tryItOut('POSTuser-rekomendasi-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-rekomendasi-create" onclick="cancelTryOut('POSTuser-rekomendasi-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-rekomendasi-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/rekomendasi/create</code></b>
</p>
<p>
<label id="auth-POSTuser-rekomendasi-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-rekomendasi-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>penerima_rekomendasi</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="penerima_rekomendasi" data-endpoint="POSTuser-rekomendasi-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>catatan</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="catatan" data-endpoint="POSTuser-rekomendasi-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## Update Rekomendasi
untuk update rekomendasi, hanya pemberi dan penerima rekomendasi yang bisa update

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/rekomendasi/2/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "penerima_rekomendasi": 2,
    "catatan": "voluptatem"
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
    "data": {
        "id": null,
        "penerimaRekomendasi": null,
        "pemberiRekomendasi": null,
        "catatan": null
    }
}
```
<div id="execution-results-POSTuser-rekomendasi--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-rekomendasi--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-rekomendasi--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-rekomendasi--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-rekomendasi--id--update"></code></pre>
</div>
<form id="form-POSTuser-rekomendasi--id--update" data-method="POST" data-path="user/rekomendasi/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-rekomendasi--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-rekomendasi--id--update" onclick="tryItOut('POSTuser-rekomendasi--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-rekomendasi--id--update" onclick="cancelTryOut('POSTuser-rekomendasi--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-rekomendasi--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/rekomendasi/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-rekomendasi--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-rekomendasi--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-rekomendasi--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>penerima_rekomendasi</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="penerima_rekomendasi" data-endpoint="POSTuser-rekomendasi--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>catatan</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="catatan" data-endpoint="POSTuser-rekomendasi--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Rekomendasi
untuk hapus rekomendasi, hanya pemberi dan penerima rekomendasi yang bisa hapus

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/rekomendasi/5/delete"
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
    "message": "Data Rekomendasi berhasil dihapus"
}
```
<div id="execution-results-POSTuser-rekomendasi--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-rekomendasi--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-rekomendasi--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-rekomendasi--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-rekomendasi--id--delete"></code></pre>
</div>
<form id="form-POSTuser-rekomendasi--id--delete" data-method="POST" data-path="user/rekomendasi/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-rekomendasi--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-rekomendasi--id--delete" onclick="tryItOut('POSTuser-rekomendasi--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-rekomendasi--id--delete" onclick="cancelTryOut('POSTuser-rekomendasi--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-rekomendasi--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/rekomendasi/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-rekomendasi--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-rekomendasi--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-rekomendasi--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



