# Comment


## View Comment
untuk view comment

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/comment/19/view/ut"
);

let params = {
    "fields[comment]": "tempore",
    "filter[user_id]": "sint",
    "sort": "expedita",
    "page[number]": "2",
    "page[size]": "18",
    "include": "libero",
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
<div id="execution-results-GETuser-comment--id--view--model-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-comment--id--view--model-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-comment--id--view--model-"></code></pre>
</div>
<div id="execution-error-GETuser-comment--id--view--model-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-comment--id--view--model-"></code></pre>
</div>
<form id="form-GETuser-comment--id--view--model-" data-method="GET" data-path="user/comment/{id}/view/{model}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-comment--id--view--model-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-comment--id--view--model-" onclick="tryItOut('GETuser-comment--id--view--model-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-comment--id--view--model-" onclick="cancelTryOut('GETuser-comment--id--view--model-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-comment--id--view--model-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/comment/{id}/view/{model}</code></b>
</p>
<p>
<label id="auth-GETuser-comment--id--view--model-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-comment--id--view--model-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-comment--id--view--model-" data-component="url" required  hidden>
<br>
id model</p>
<p>
<b><code>model</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="model" data-endpoint="GETuser-comment--id--view--model-" data-component="url" required  hidden>
<br>
nama model ex:'Feed','Artikel'</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[comment]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[comment]" data-endpoint="GETuser-comment--id--view--model-" data-component="query"  hidden>
<br>
select kolom 'user_id','content','commentable_type','commentable_id'</p>
<p>
<b><code>filter[user_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[user_id]" data-endpoint="GETuser-comment--id--view--model-" data-component="query"  hidden>
<br>
Filter by nama 'user_id','content','commentable_type','commentable_id'</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-comment--id--view--model-" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-comment--id--view--model-" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-comment--id--view--model-" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-comment--id--view--model-" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
</form>


## Create Comment
untuk create comment

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/comment/create/porro"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "asperiores",
    "commentable_id": 8
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
<div id="execution-results-POSTuser-comment-create--model-" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-comment-create--model-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-comment-create--model-"></code></pre>
</div>
<div id="execution-error-POSTuser-comment-create--model-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-comment-create--model-"></code></pre>
</div>
<form id="form-POSTuser-comment-create--model-" data-method="POST" data-path="user/comment/create/{model}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-comment-create--model-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-comment-create--model-" onclick="tryItOut('POSTuser-comment-create--model-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-comment-create--model-" onclick="cancelTryOut('POSTuser-comment-create--model-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-comment-create--model-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/comment/create/{model}</code></b>
</p>
<p>
<label id="auth-POSTuser-comment-create--model-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-comment-create--model-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>model</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="model" data-endpoint="POSTuser-comment-create--model-" data-component="url" required  hidden>
<br>
jenis model: 'Feed','Artikel'</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="content" data-endpoint="POSTuser-comment-create--model-" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>commentable_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="commentable_id" data-endpoint="POSTuser-comment-create--model-" data-component="body" required  hidden>
<br>
</p>

</form>


## Update Comment
untuk update comment

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/comment/14/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "content": "dolorem"
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
<div id="execution-results-POSTuser-comment--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-comment--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-comment--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-comment--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-comment--id--update"></code></pre>
</div>
<form id="form-POSTuser-comment--id--update" data-method="POST" data-path="user/comment/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-comment--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-comment--id--update" onclick="tryItOut('POSTuser-comment--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-comment--id--update" onclick="cancelTryOut('POSTuser-comment--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-comment--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/comment/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-comment--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-comment--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-comment--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>content</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="content" data-endpoint="POSTuser-comment--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Comment
untuk menghapus komentar

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/comment/18/delete"
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
<div id="execution-results-POSTuser-comment--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-comment--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-comment--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-comment--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-comment--id--delete"></code></pre>
</div>
<form id="form-POSTuser-comment--id--delete" data-method="POST" data-path="user/comment/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-comment--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-comment--id--delete" onclick="tryItOut('POSTuser-comment--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-comment--id--delete" onclick="cancelTryOut('POSTuser-comment--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-comment--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/comment/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-comment--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-comment--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-comment--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



