# Forum


## List Kategori Forum
untuk list kategori forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum-kategori"
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


<div id="execution-results-GETuser-forum-kategori" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-forum-kategori"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-forum-kategori"></code></pre>
</div>
<div id="execution-error-GETuser-forum-kategori" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-forum-kategori"></code></pre>
</div>
<form id="form-GETuser-forum-kategori" data-method="GET" data-path="user/forum-kategori" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-forum-kategori', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-forum-kategori" onclick="tryItOut('GETuser-forum-kategori');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-forum-kategori" onclick="cancelTryOut('GETuser-forum-kategori');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-forum-kategori" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/forum-kategori</code></b>
</p>
<p>
<label id="auth-GETuser-forum-kategori" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-forum-kategori" data-component="header"></label>
</p>
</form>


## Create Kategori Forum
untuk create kategori forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum-kategori/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "sed"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-forum-kategori-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum-kategori-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum-kategori-create"></code></pre>
</div>
<div id="execution-error-POSTuser-forum-kategori-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum-kategori-create"></code></pre>
</div>
<form id="form-POSTuser-forum-kategori-create" data-method="POST" data-path="user/forum-kategori/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum-kategori-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum-kategori-create" onclick="tryItOut('POSTuser-forum-kategori-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum-kategori-create" onclick="cancelTryOut('POSTuser-forum-kategori-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum-kategori-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum-kategori/create</code></b>
</p>
<p>
<label id="auth-POSTuser-forum-kategori-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum-kategori-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTuser-forum-kategori-create" data-component="body" required  hidden>
<br>
</p>

</form>


## Update Kategori Forum
untuk update kategori forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum-kategori/architecto/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "qui"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-forum-kategori--nama--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum-kategori--nama--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum-kategori--nama--update"></code></pre>
</div>
<div id="execution-error-POSTuser-forum-kategori--nama--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum-kategori--nama--update"></code></pre>
</div>
<form id="form-POSTuser-forum-kategori--nama--update" data-method="POST" data-path="user/forum-kategori/{nama}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum-kategori--nama--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum-kategori--nama--update" onclick="tryItOut('POSTuser-forum-kategori--nama--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum-kategori--nama--update" onclick="cancelTryOut('POSTuser-forum-kategori--nama--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum-kategori--nama--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum-kategori/{nama}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-forum-kategori--nama--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum-kategori--nama--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTuser-forum-kategori--nama--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTuser-forum-kategori--nama--update" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete Kategori Forum
untuk hapus kategori forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum-kategori/dolor/delete"
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


<div id="execution-results-POSTuser-forum-kategori--nama--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum-kategori--nama--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum-kategori--nama--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-forum-kategori--nama--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum-kategori--nama--delete"></code></pre>
</div>
<form id="form-POSTuser-forum-kategori--nama--delete" data-method="POST" data-path="user/forum-kategori/{nama}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum-kategori--nama--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum-kategori--nama--delete" onclick="tryItOut('POSTuser-forum-kategori--nama--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum-kategori--nama--delete" onclick="cancelTryOut('POSTuser-forum-kategori--nama--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum-kategori--nama--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum-kategori/{nama}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-forum-kategori--nama--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum-kategori--nama--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTuser-forum-kategori--nama--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## List Forum
untuk list forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum"
);

let params = {
    "sort": "enim",
    "page[number]": "18",
    "page[size]": "14",
    "include": "repudiandae",
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
            "id": null,
            "nama_kategori": null,
            "judul": null,
            "isi": null,
            "image": null,
            "user_id": null,
            "views": null,
            "alasan": null,
            "status": null,
            "created_at": null,
            "updated_at": null
        }
    ]
}
```
<div id="execution-results-GETuser-forum" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-forum"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-forum"></code></pre>
</div>
<div id="execution-error-GETuser-forum" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-forum"></code></pre>
</div>
<form id="form-GETuser-forum" data-method="GET" data-path="user/forum" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-forum', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-forum" onclick="tryItOut('GETuser-forum');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-forum" onclick="cancelTryOut('GETuser-forum');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-forum" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/forum</code></b>
</p>
<p>
<label id="auth-GETuser-forum" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-forum" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-forum" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-forum" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-forum" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-forum" data-component="query"  hidden>
<br>
get data relasi (dataComment,dataUser,likers).</p>
</form>


## View Forum
untuk view forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/5/view"
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
            "nama_kategori": null,
            "judul": null,
            "isi": null,
            "image": null,
            "user_id": null,
            "views": null,
            "alasan": null,
            "status": null,
            "created_at": null,
            "updated_at": null
        }
    ]
}
```
<div id="execution-results-GETuser-forum--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-forum--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-forum--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-forum--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-forum--id--view"></code></pre>
</div>
<form id="form-GETuser-forum--id--view" data-method="GET" data-path="user/forum/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-forum--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-forum--id--view" onclick="tryItOut('GETuser-forum--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-forum--id--view" onclick="cancelTryOut('GETuser-forum--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-forum--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/forum/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-forum--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-forum--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-forum--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Forum
untuk create forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('nama_kategori', 'alias');
body.append('judul', 'placeat');
body.append('isi', 'perspiciatis');
body.append('objImage', document.querySelector('input[name="objImage"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": "success",
    "message": "data berhasil disimpan!",
    "data": {
        "id": 1,
        "kategori_id": null,
        "judul": "rerum",
        "isi": "enim",
        "image": "1614671545.png",
        "user_id": 1,
        "views": null,
        "created_at": "2021-03-02T07:52:25.000000Z",
        "updated_at": "2021-03-02T07:52:25.000000Z"
    }
}
```
<div id="execution-results-POSTuser-forum-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum-create"></code></pre>
</div>
<div id="execution-error-POSTuser-forum-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum-create"></code></pre>
</div>
<form id="form-POSTuser-forum-create" data-method="POST" data-path="user/forum/create" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum-create" onclick="tryItOut('POSTuser-forum-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum-create" onclick="cancelTryOut('POSTuser-forum-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum/create</code></b>
</p>
<p>
<label id="auth-POSTuser-forum-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTuser-forum-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="judul" data-endpoint="POSTuser-forum-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>isi</code></b>&nbsp;&nbsp;<small>text</small>  &nbsp;
<input type="text" name="isi" data-endpoint="POSTuser-forum-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>objImage</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="objImage" data-endpoint="POSTuser-forum-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## Update Forum
untuk update forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/10/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('nama_kategori', 'doloremque');
body.append('judul', 'dicta');
body.append('isi', 'in');
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": "success",
    "message": "Forum berhasil diupdate",
    "data": {
        "id": 15,
        "kategori_id": "2",
        "judul": "judul13",
        "isi": "isi123",
        "image": "1614141329.jpg",
        "user_id": 1,
        "views": 0,
        "created_at": "2021-02-24T04:18:26.000000Z",
        "updated_at": "2021-02-24T04:35:29.000000Z"
    }
}
```
<div id="execution-results-POSTuser-forum--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-forum--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum--id--update"></code></pre>
</div>
<form id="form-POSTuser-forum--id--update" data-method="POST" data-path="user/forum/{id}/update" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum--id--update" onclick="tryItOut('POSTuser-forum--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum--id--update" onclick="cancelTryOut('POSTuser-forum--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-forum--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-forum--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTuser-forum--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="judul" data-endpoint="POSTuser-forum--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>isi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="isi" data-endpoint="POSTuser-forum--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="image" data-endpoint="POSTuser-forum--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Forum
untuk delete forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/17/delete"
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
    "message": "Data Forum berhasil dihapus"
}
```
<div id="execution-results-POSTuser-forum--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-forum--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum--id--delete"></code></pre>
</div>
<form id="form-POSTuser-forum--id--delete" data-method="POST" data-path="user/forum/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum--id--delete" onclick="tryItOut('POSTuser-forum--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum--id--delete" onclick="cancelTryOut('POSTuser-forum--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-forum--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-forum--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## Like Forum
untuk like forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/4/like"
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


<div id="execution-results-POSTuser-forum--id--like" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum--id--like"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum--id--like"></code></pre>
</div>
<div id="execution-error-POSTuser-forum--id--like" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum--id--like"></code></pre>
</div>
<form id="form-POSTuser-forum--id--like" data-method="POST" data-path="user/forum/{id}/like" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum--id--like', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum--id--like" onclick="tryItOut('POSTuser-forum--id--like');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum--id--like" onclick="cancelTryOut('POSTuser-forum--id--like');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum--id--like" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum/{id}/like</code></b>
</p>
<p>
<label id="auth-POSTuser-forum--id--like" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum--id--like" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-forum--id--like" data-component="url" required  hidden>
<br>
</p>
</form>


## Unlike Forum
untuk unlike forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/10/unlike"
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


<div id="execution-results-POSTuser-forum--id--unlike" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum--id--unlike"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum--id--unlike"></code></pre>
</div>
<div id="execution-error-POSTuser-forum--id--unlike" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum--id--unlike"></code></pre>
</div>
<form id="form-POSTuser-forum--id--unlike" data-method="POST" data-path="user/forum/{id}/unlike" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum--id--unlike', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum--id--unlike" onclick="tryItOut('POSTuser-forum--id--unlike');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum--id--unlike" onclick="cancelTryOut('POSTuser-forum--id--unlike');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum--id--unlike" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum/{id}/unlike</code></b>
</p>
<p>
<label id="auth-POSTuser-forum--id--unlike" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum--id--unlike" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-forum--id--unlike" data-component="url" required  hidden>
<br>
</p>
</form>


## Status Forum
untuk update status forum open/closed

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/moderator/forum/placeat/status"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "alasan": "nemo"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTmoderator-forum--id--status" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTmoderator-forum--id--status"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTmoderator-forum--id--status"></code></pre>
</div>
<div id="execution-error-POSTmoderator-forum--id--status" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTmoderator-forum--id--status"></code></pre>
</div>
<form id="form-POSTmoderator-forum--id--status" data-method="POST" data-path="moderator/forum/{id}/status" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTmoderator-forum--id--status', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTmoderator-forum--id--status" onclick="tryItOut('POSTmoderator-forum--id--status');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTmoderator-forum--id--status" onclick="cancelTryOut('POSTmoderator-forum--id--status');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTmoderator-forum--id--status" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>moderator/forum/{id}/status</code></b>
</p>
<p>
<label id="auth-POSTmoderator-forum--id--status" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTmoderator-forum--id--status" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="id" data-endpoint="POSTmoderator-forum--id--status" data-component="url"  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>alasan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="alasan" data-endpoint="POSTmoderator-forum--id--status" data-component="body" required  hidden>
<br>
</p>

</form>



