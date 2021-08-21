# Feeds


## List Feed
untuk list Feed

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/feeds-list"
);

let params = {
    "sort": "quis",
    "page[number]": "10",
    "page[size]": "14",
    "include": "dolorem",
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
<div id="execution-results-GETuser-feeds-list" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-feeds-list"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-feeds-list"></code></pre>
</div>
<div id="execution-error-GETuser-feeds-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-feeds-list"></code></pre>
</div>
<form id="form-GETuser-feeds-list" data-method="GET" data-path="user/feeds-list" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-feeds-list', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-feeds-list" onclick="tryItOut('GETuser-feeds-list');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-feeds-list" onclick="cancelTryOut('GETuser-feeds-list');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-feeds-list" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/feeds-list</code></b>
</p>
<p>
<label id="auth-GETuser-feeds-list" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-feeds-list" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-feeds-list" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-feeds-list" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-feeds-list" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-feeds-list" data-component="query"  hidden>
<br>
get data relasi (dataUser,comments,likers).</p>
</form>


## MyFeeds
untuk melihat feed saya

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/feeds"
);

let params = {
    "fields[feeds]": "velit",
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
            "id": 1,
            "user_id": 1,
            "content": "Halo",
            "created_at": "2021-02-16T20:05:59.000000Z",
            "updated_at": "2021-02-16T20:06:01.000000Z"
        }
    ]
}
```
<div id="execution-results-GETuser-feeds" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-feeds"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-feeds"></code></pre>
</div>
<div id="execution-error-GETuser-feeds" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-feeds"></code></pre>
</div>
<form id="form-GETuser-feeds" data-method="GET" data-path="user/feeds" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-feeds', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-feeds" onclick="tryItOut('GETuser-feeds');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-feeds" onclick="cancelTryOut('GETuser-feeds');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-feeds" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/feeds</code></b>
</p>
<p>
<label id="auth-GETuser-feeds" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-feeds" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[feeds]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[feeds]" data-endpoint="GETuser-feeds" data-component="query"  hidden>
<br>
select kolom 'id','user_id','content','created_at','updated_at'</p>
</form>


## view Feeds

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/feeds/13/view"
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
<div id="execution-results-GETuser-feeds--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-feeds--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-feeds--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-feeds--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-feeds--id--view"></code></pre>
</div>
<form id="form-GETuser-feeds--id--view" data-method="GET" data-path="user/feeds/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-feeds--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-feeds--id--view" onclick="tryItOut('GETuser-feeds--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-feeds--id--view" onclick="cancelTryOut('GETuser-feeds--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-feeds--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/feeds/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-feeds--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-feeds--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-feeds--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Feed
untuk membuat feed

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/feeds/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "consequuntur"
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
        "id": 3,
        "user_id": 1,
        "content": "ini create feed",
        "created_at": "2021-02-17T03:27:12.000000Z",
        "updated_at": "2021-02-17T03:27:12.000000Z"
    }
}
```
<div id="execution-results-POSTuser-feeds-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-feeds-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-feeds-create"></code></pre>
</div>
<div id="execution-error-POSTuser-feeds-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-feeds-create"></code></pre>
</div>
<form id="form-POSTuser-feeds-create" data-method="POST" data-path="user/feeds/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-feeds-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-feeds-create" onclick="tryItOut('POSTuser-feeds-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-feeds-create" onclick="cancelTryOut('POSTuser-feeds-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-feeds-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/feeds/create</code></b>
</p>
<p>
<label id="auth-POSTuser-feeds-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-feeds-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTuser-feeds-create" data-component="body" required  hidden>
<br>
</p>

</form>


## Update Feed
untuk update feed

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/feeds/6/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "omnis"
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
    "message": "Feed berhasil diupdate",
    "data": {
        "id": 1,
        "user_id": 1,
        "content": "Halo",
        "created_at": "2021-02-16T20:05:59.000000Z",
        "updated_at": "2021-02-16T20:06:01.000000Z"
    }
}
```
<div id="execution-results-POSTuser-feeds--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-feeds--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-feeds--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-feeds--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-feeds--id--update"></code></pre>
</div>
<form id="form-POSTuser-feeds--id--update" data-method="POST" data-path="user/feeds/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-feeds--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-feeds--id--update" onclick="tryItOut('POSTuser-feeds--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-feeds--id--update" onclick="cancelTryOut('POSTuser-feeds--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-feeds--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/feeds/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-feeds--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-feeds--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-feeds--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="content" data-endpoint="POSTuser-feeds--id--update" data-component="body"  hidden>
<br>
</p>

</form>


## Delete Feed
untuk delete feed

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/feeds/2/delete"
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
    "message": "Data Feed berhasil dihapus"
}
```
<div id="execution-results-POSTuser-feeds--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-feeds--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-feeds--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-feeds--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-feeds--id--delete"></code></pre>
</div>
<form id="form-POSTuser-feeds--id--delete" data-method="POST" data-path="user/feeds/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-feeds--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-feeds--id--delete" onclick="tryItOut('POSTuser-feeds--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-feeds--id--delete" onclick="cancelTryOut('POSTuser-feeds--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-feeds--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/feeds/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-feeds--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-feeds--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-feeds--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## Like Feed
untuk like feed

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/feeds/4/like"
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
    "message": "Berhasil like feed",
    "data": {
        "id": 8,
        "likes": 2,
        "likeable_type": "App\\Models\\Feed",
        "likeable_id": 2,
        "created_at": "2021-02-22T03:38:31.000000Z",
        "updated_at": "2021-02-22T03:38:31.000000Z"
    }
}
```
<div id="execution-results-POSTuser-feeds--id--like" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-feeds--id--like"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-feeds--id--like"></code></pre>
</div>
<div id="execution-error-POSTuser-feeds--id--like" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-feeds--id--like"></code></pre>
</div>
<form id="form-POSTuser-feeds--id--like" data-method="POST" data-path="user/feeds/{id}/like" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-feeds--id--like', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-feeds--id--like" onclick="tryItOut('POSTuser-feeds--id--like');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-feeds--id--like" onclick="cancelTryOut('POSTuser-feeds--id--like');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-feeds--id--like" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/feeds/{id}/like</code></b>
</p>
<p>
<label id="auth-POSTuser-feeds--id--like" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-feeds--id--like" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-feeds--id--like" data-component="url" required  hidden>
<br>
</p>
</form>


## Unlike Feed
untuk unlike feed

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/feeds/19/unlike"
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
    "message": "Berhasil unlike feed",
    "data": true
}
```
<div id="execution-results-POSTuser-feeds--id--unlike" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-feeds--id--unlike"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-feeds--id--unlike"></code></pre>
</div>
<div id="execution-error-POSTuser-feeds--id--unlike" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-feeds--id--unlike"></code></pre>
</div>
<form id="form-POSTuser-feeds--id--unlike" data-method="POST" data-path="user/feeds/{id}/unlike" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-feeds--id--unlike', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-feeds--id--unlike" onclick="tryItOut('POSTuser-feeds--id--unlike');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-feeds--id--unlike" onclick="cancelTryOut('POSTuser-feeds--id--unlike');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-feeds--id--unlike" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/feeds/{id}/unlike</code></b>
</p>
<p>
<label id="auth-POSTuser-feeds--id--unlike" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-feeds--id--unlike" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-feeds--id--unlike" data-component="url" required  hidden>
<br>
</p>
</form>



