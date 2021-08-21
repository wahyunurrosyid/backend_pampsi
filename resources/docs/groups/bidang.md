# Bidang


## Create Bidang
untuk create bidang

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/bidang/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "deleniti"
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
        "id": 4,
        "nama": "Psikologi Test"
    }
}
```
<div id="execution-results-POSTadmin-bidang-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-bidang-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-bidang-create"></code></pre>
</div>
<div id="execution-error-POSTadmin-bidang-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-bidang-create"></code></pre>
</div>
<form id="form-POSTadmin-bidang-create" data-method="POST" data-path="admin/bidang/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-bidang-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-bidang-create" onclick="tryItOut('POSTadmin-bidang-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-bidang-create" onclick="cancelTryOut('POSTadmin-bidang-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-bidang-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/bidang/create</code></b>
</p>
<p>
<label id="auth-POSTadmin-bidang-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-bidang-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-bidang-create" data-component="body" required  hidden>
<br>
unique</p>

</form>


## Update Bidang
untuk update bidang

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/bidang/5/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "fuga"
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
    "message": "Bidang berhasil diupdate",
    "data": {
        "id": 4,
        "nama": "Psokolo"
    }
}
```
<div id="execution-results-POSTadmin-bidang--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-bidang--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-bidang--id--update"></code></pre>
</div>
<div id="execution-error-POSTadmin-bidang--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-bidang--id--update"></code></pre>
</div>
<form id="form-POSTadmin-bidang--id--update" data-method="POST" data-path="admin/bidang/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-bidang--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-bidang--id--update" onclick="tryItOut('POSTadmin-bidang--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-bidang--id--update" onclick="cancelTryOut('POSTadmin-bidang--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-bidang--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/bidang/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTadmin-bidang--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-bidang--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-bidang--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTadmin-bidang--id--update" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete Bidang
untuk delete bidang

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/bidang/10/delete"
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
    "message": "Data Bidang berhasil dihapus"
}
```
<div id="execution-results-POSTadmin-bidang--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-bidang--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-bidang--id--delete"></code></pre>
</div>
<div id="execution-error-POSTadmin-bidang--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-bidang--id--delete"></code></pre>
</div>
<form id="form-POSTadmin-bidang--id--delete" data-method="POST" data-path="admin/bidang/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-bidang--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-bidang--id--delete" onclick="tryItOut('POSTadmin-bidang--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-bidang--id--delete" onclick="cancelTryOut('POSTadmin-bidang--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-bidang--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/bidang/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTadmin-bidang--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-bidang--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-bidang--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## View Bidang
untuk view bidang

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/bidang/6/view"
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
            "id": 1,
            "nama": "Psikologi Klinis"
        },
        {
            "id": 2,
            "nama": "Psikologi Industri"
        },
        {
            "id": 3,
            "nama": "Psikologi Pendidikan"
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/general\/all-bidang?page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/general\/all-bidang?page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/general\/all-bidang",
        "per_page": 30,
        "to": 3,
        "total": 3
    }
}
```
<div id="execution-results-POSTadmin-bidang--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-bidang--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-bidang--id--view"></code></pre>
</div>
<div id="execution-error-POSTadmin-bidang--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-bidang--id--view"></code></pre>
</div>
<form id="form-POSTadmin-bidang--id--view" data-method="POST" data-path="admin/bidang/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-bidang--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-bidang--id--view" onclick="tryItOut('POSTadmin-bidang--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-bidang--id--view" onclick="cancelTryOut('POSTadmin-bidang--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-bidang--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/bidang/{id}/view</code></b>
</p>
<p>
<label id="auth-POSTadmin-bidang--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-bidang--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-bidang--id--view" data-component="url" required  hidden>
<br>
</p>
</form>



