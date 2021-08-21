# Portfolio


## list Portfolio
untuk list portfolio

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/portfolio/13/list"
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
    "data": [
        {
            "id": null,
            "idUser": null,
            "layanan": null,
            "kategori": null,
            "klien": null,
            "start_date": null,
            "end_date": null,
            "type": null,
            "location": null,
            "deskripsi": null,
            "position": null
        }
    ]
}
```
<div id="execution-results-POSTuser-portfolio--id--list" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-portfolio--id--list"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-portfolio--id--list"></code></pre>
</div>
<div id="execution-error-POSTuser-portfolio--id--list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-portfolio--id--list"></code></pre>
</div>
<form id="form-POSTuser-portfolio--id--list" data-method="POST" data-path="user/portfolio/{id}/list" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-portfolio--id--list', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-portfolio--id--list" onclick="tryItOut('POSTuser-portfolio--id--list');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-portfolio--id--list" onclick="cancelTryOut('POSTuser-portfolio--id--list');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-portfolio--id--list" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/portfolio/{id}/list</code></b>
</p>
<p>
<label id="auth-POSTuser-portfolio--id--list" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-portfolio--id--list" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-portfolio--id--list" data-component="url" required  hidden>
<br>
</p>
</form>


## view Portfolio
untuk view portfolio

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/portfolio/19/view"
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
            "idUser": null,
            "layanan": null,
            "kategori": null,
            "klien": null,
            "start_date": null,
            "end_date": null,
            "type": null,
            "location": null,
            "deskripsi": null,
            "position": null
        }
    ]
}
```
<div id="execution-results-GETuser-portfolio--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-portfolio--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-portfolio--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-portfolio--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-portfolio--id--view"></code></pre>
</div>
<form id="form-GETuser-portfolio--id--view" data-method="GET" data-path="user/portfolio/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-portfolio--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-portfolio--id--view" onclick="tryItOut('GETuser-portfolio--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-portfolio--id--view" onclick="cancelTryOut('GETuser-portfolio--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-portfolio--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/portfolio/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-portfolio--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-portfolio--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-portfolio--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Portfolio
untuk create portfolio

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/portfolio/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "layanan": "illo",
    "kategori": "amet",
    "klien": "aliquam",
    "start_date": "culpa",
    "end_date": "recusandae",
    "type": "reprehenderit",
    "location": "consequatur",
    "deskripsi": "accusamus",
    "position": "modi"
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
        "id": 1,
        "idUser": "1",
        "layanan": "test",
        "kategori": "test",
        "klien": "test",
        "tanggal": "2021-2-3"
    }
}
```
<div id="execution-results-POSTuser-portfolio-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-portfolio-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-portfolio-create"></code></pre>
</div>
<div id="execution-error-POSTuser-portfolio-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-portfolio-create"></code></pre>
</div>
<form id="form-POSTuser-portfolio-create" data-method="POST" data-path="user/portfolio/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-portfolio-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-portfolio-create" onclick="tryItOut('POSTuser-portfolio-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-portfolio-create" onclick="cancelTryOut('POSTuser-portfolio-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-portfolio-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/portfolio/create</code></b>
</p>
<p>
<label id="auth-POSTuser-portfolio-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-portfolio-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>layanan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="layanan" data-endpoint="POSTuser-portfolio-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kategori" data-endpoint="POSTuser-portfolio-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>klien</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="klien" data-endpoint="POSTuser-portfolio-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="start_date" data-endpoint="POSTuser-portfolio-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="end_date" data-endpoint="POSTuser-portfolio-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>enum</small>  &nbsp;
<input type="text" name="type" data-endpoint="POSTuser-portfolio-create" data-component="body" required  hidden>
<br>
(Project Based, Individual Service)</p>
<p>
<b><code>location</code></b>&nbsp;&nbsp;<small>text</small>  &nbsp;
<input type="text" name="location" data-endpoint="POSTuser-portfolio-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>text</small>  &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTuser-portfolio-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>position</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="position" data-endpoint="POSTuser-portfolio-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## update Portfolio
untuk update portfolio

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/portfolio/11/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "layanan": "deleniti",
    "kategori": "odio",
    "klien": "optio",
    "tanggal": "nihil"
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
    "message": "Portfolio berhasil diupdate",
    "data": {
        "id": 1,
        "idUser": 1,
        "layanan": "test1",
        "kategori": "test1",
        "klien": "test",
        "tanggal": "2021-02-03"
    }
}
```
<div id="execution-results-POSTuser-portfolio--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-portfolio--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-portfolio--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-portfolio--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-portfolio--id--update"></code></pre>
</div>
<form id="form-POSTuser-portfolio--id--update" data-method="POST" data-path="user/portfolio/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-portfolio--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-portfolio--id--update" onclick="tryItOut('POSTuser-portfolio--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-portfolio--id--update" onclick="cancelTryOut('POSTuser-portfolio--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-portfolio--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/portfolio/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-portfolio--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-portfolio--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-portfolio--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>layanan</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="layanan" data-endpoint="POSTuser-portfolio--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="kategori" data-endpoint="POSTuser-portfolio--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>klien</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="klien" data-endpoint="POSTuser-portfolio--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>tanggal</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="tanggal" data-endpoint="POSTuser-portfolio--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Portfolio
untuk delete portfolio

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/portfolio/13/delete"
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
    "message": "Data Portfolio berhasil dihapus"
}
```
<div id="execution-results-POSTuser-portfolio--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-portfolio--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-portfolio--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-portfolio--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-portfolio--id--delete"></code></pre>
</div>
<form id="form-POSTuser-portfolio--id--delete" data-method="POST" data-path="user/portfolio/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-portfolio--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-portfolio--id--delete" onclick="tryItOut('POSTuser-portfolio--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-portfolio--id--delete" onclick="cancelTryOut('POSTuser-portfolio--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-portfolio--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/portfolio/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-portfolio--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-portfolio--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-portfolio--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



