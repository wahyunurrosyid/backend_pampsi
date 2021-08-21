# Moderator Forum


## Assign Moderator Forum
untuk assign moderator forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/moderator/2/assign"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_kategori": "consequatur"
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
    "message": "Berhasil assign moderator",
    "data": {
        "user_id": "3",
        "nama_kategori": "Psikologi Industri",
        "updated_at": "2021-03-03T08:45:43.000000Z",
        "created_at": "2021-03-03T08:45:43.000000Z",
        "id": 1
    }
}
```
<div id="execution-results-POSTadmin-moderator--id--assign" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-moderator--id--assign"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-moderator--id--assign"></code></pre>
</div>
<div id="execution-error-POSTadmin-moderator--id--assign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-moderator--id--assign"></code></pre>
</div>
<form id="form-POSTadmin-moderator--id--assign" data-method="POST" data-path="admin/moderator/{id}/assign" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-moderator--id--assign', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-moderator--id--assign" onclick="tryItOut('POSTadmin-moderator--id--assign');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-moderator--id--assign" onclick="cancelTryOut('POSTadmin-moderator--id--assign');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-moderator--id--assign" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/moderator/{id}/assign</code></b>
</p>
<p>
<label id="auth-POSTadmin-moderator--id--assign" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-moderator--id--assign" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-moderator--id--assign" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTadmin-moderator--id--assign" data-component="body" required  hidden>
<br>
</p>

</form>


## Unassign Moderator Forum
untuk assign moderator forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/moderator/8/unassign"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama_kategori": "necessitatibus"
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
    "message": "Berhasil unassign moderator",
    "data": 1
}
```
<div id="execution-results-POSTadmin-moderator--id--unassign" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTadmin-moderator--id--unassign"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTadmin-moderator--id--unassign"></code></pre>
</div>
<div id="execution-error-POSTadmin-moderator--id--unassign" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTadmin-moderator--id--unassign"></code></pre>
</div>
<form id="form-POSTadmin-moderator--id--unassign" data-method="POST" data-path="admin/moderator/{id}/unassign" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTadmin-moderator--id--unassign', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTadmin-moderator--id--unassign" onclick="tryItOut('POSTadmin-moderator--id--unassign');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTadmin-moderator--id--unassign" onclick="cancelTryOut('POSTadmin-moderator--id--unassign');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTadmin-moderator--id--unassign" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>admin/moderator/{id}/unassign</code></b>
</p>
<p>
<label id="auth-POSTadmin-moderator--id--unassign" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTadmin-moderator--id--unassign" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTadmin-moderator--id--unassign" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTadmin-moderator--id--unassign" data-component="body" required  hidden>
<br>
</p>

</form>


## List moderator per kategori

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/moderator/rem/list"
);

let params = {
    "include": "est",
    "page[number]": "5",
    "page[size]": "8",
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
<div id="execution-results-GETmoderator--kategori--list" hidden>
    <blockquote>Received response<span id="execution-response-status-GETmoderator--kategori--list"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETmoderator--kategori--list"></code></pre>
</div>
<div id="execution-error-GETmoderator--kategori--list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETmoderator--kategori--list"></code></pre>
</div>
<form id="form-GETmoderator--kategori--list" data-method="GET" data-path="moderator/{kategori}/list" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETmoderator--kategori--list', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETmoderator--kategori--list" onclick="tryItOut('GETmoderator--kategori--list');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETmoderator--kategori--list" onclick="cancelTryOut('GETmoderator--kategori--list');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETmoderator--kategori--list" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>moderator/{kategori}/list</code></b>
</p>
<p>
<label id="auth-GETmoderator--kategori--list" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETmoderator--kategori--list" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kategori" data-endpoint="GETmoderator--kategori--list" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETmoderator--kategori--list" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETmoderator--kategori--list" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETmoderator--kategori--list" data-component="query"  hidden>
<br>
oprional</p>
</form>



