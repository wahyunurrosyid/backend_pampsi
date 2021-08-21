# Comment Forum


## View Comment Forum
untuk view comment forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/comment/18/view"
);

let params = {
    "fields[comment_forum]": "est",
    "filter[user_id]": "aspernatur",
    "sort": "architecto",
    "page[number]": "1",
    "page[size]": "15",
    "include": "ut",
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
<div id="execution-results-GETuser-forum-comment--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-forum-comment--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-forum-comment--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-forum-comment--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-forum-comment--id--view"></code></pre>
</div>
<form id="form-GETuser-forum-comment--id--view" data-method="GET" data-path="user/forum/comment/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-forum-comment--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-forum-comment--id--view" onclick="tryItOut('GETuser-forum-comment--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-forum-comment--id--view" onclick="cancelTryOut('GETuser-forum-comment--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-forum-comment--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/forum/comment/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-forum-comment--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-forum-comment--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-forum-comment--id--view" data-component="url" required  hidden>
<br>
id forum</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[comment_forum]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[comment_forum]" data-endpoint="GETuser-forum-comment--id--view" data-component="query"  hidden>
<br>
select kolom 'user_id','content','forum_id'</p>
<p>
<b><code>filter[user_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[user_id]" data-endpoint="GETuser-forum-comment--id--view" data-component="query"  hidden>
<br>
Filter by nama 'user_id','content', 'forum_id'</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-forum-comment--id--view" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-forum-comment--id--view" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-forum-comment--id--view" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-forum-comment--id--view" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
</form>


## Create Comment Forum
untuk create comment forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/comment/eum/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "maiores"
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
    "message": "Berhasil membuat komentar",
    "data": {
        "user_id": 3,
        "content": "halo",
        "commentable_type": "App\\Models\\Feed",
        "commentable_id": 1,
        "updated_at": "2021-02-27T02:38:11.000000Z",
        "created_at": "2021-02-27T02:38:11.000000Z",
        "id": 1
    }
}
```
<div id="execution-results-POSTuser-forum-comment--id--create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum-comment--id--create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum-comment--id--create"></code></pre>
</div>
<div id="execution-error-POSTuser-forum-comment--id--create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum-comment--id--create"></code></pre>
</div>
<form id="form-POSTuser-forum-comment--id--create" data-method="POST" data-path="user/forum/comment/{id}/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum-comment--id--create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum-comment--id--create" onclick="tryItOut('POSTuser-forum-comment--id--create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum-comment--id--create" onclick="cancelTryOut('POSTuser-forum-comment--id--create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum-comment--id--create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum/comment/{id}/create</code></b>
</p>
<p>
<label id="auth-POSTuser-forum-comment--id--create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum-comment--id--create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTuser-forum-comment--id--create" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTuser-forum-comment--id--create" data-component="body" required  hidden>
<br>
</p>

</form>


## Update Comment Forum
untuk update comment forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/comment/12/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "ut"
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
    "message": "Komentar berhasil diupdate",
    "data": {
        "id": 1,
        "user_id": 3,
        "content": "yyykk",
        "commentable_type": "App\\Models\\Feed",
        "commentable_id": 1,
        "created_at": "2021-02-27T02:38:11.000000Z",
        "updated_at": "2021-02-27T02:47:12.000000Z"
    }
}
```
<div id="execution-results-POSTuser-forum-comment--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum-comment--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum-comment--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-forum-comment--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum-comment--id--update"></code></pre>
</div>
<form id="form-POSTuser-forum-comment--id--update" data-method="POST" data-path="user/forum/comment/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum-comment--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum-comment--id--update" onclick="tryItOut('POSTuser-forum-comment--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum-comment--id--update" onclick="cancelTryOut('POSTuser-forum-comment--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum-comment--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum/comment/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-forum-comment--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum-comment--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-forum-comment--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="content" data-endpoint="POSTuser-forum-comment--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Comment Forum
untuk menghapus komentar forum

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/forum/comment/13/delete"
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
    "message": "Data Comment berhasil dihapus"
}
```
<div id="execution-results-POSTuser-forum-comment--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-forum-comment--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-forum-comment--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-forum-comment--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-forum-comment--id--delete"></code></pre>
</div>
<form id="form-POSTuser-forum-comment--id--delete" data-method="POST" data-path="user/forum/comment/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-forum-comment--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-forum-comment--id--delete" onclick="tryItOut('POSTuser-forum-comment--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-forum-comment--id--delete" onclick="cancelTryOut('POSTuser-forum-comment--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-forum-comment--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/forum/comment/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-forum-comment--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-forum-comment--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-forum-comment--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



