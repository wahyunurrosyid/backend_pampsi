# Survey


## List Survey
untuk list survey

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/survey"
);

let params = {
    "fields[survey]": "odio",
    "filter[id]": "earum",
    "sort": "explicabo",
    "page[number]": "20",
    "page[size]": "16",
    "include": "consequuntur",
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
<div id="execution-results-GETuser-survey" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-survey"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-survey"></code></pre>
</div>
<div id="execution-error-GETuser-survey" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-survey"></code></pre>
</div>
<form id="form-GETuser-survey" data-method="GET" data-path="user/survey" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-survey', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-survey" onclick="tryItOut('GETuser-survey');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-survey" onclick="cancelTryOut('GETuser-survey');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-survey" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/survey</code></b>
</p>
<p>
<label id="auth-GETuser-survey" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-survey" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[survey]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[survey]" data-endpoint="GETuser-survey" data-component="query"  hidden>
<br>
select kolom 'id','user_id','kategori','close'
,'judul','keterangan','file_panduan'</p>
<p>
<b><code>filter[id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[id]" data-endpoint="GETuser-survey" data-component="query"  hidden>
<br>
Filter by id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-survey" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-survey" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-survey" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-survey" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
</form>


## View Survey
untuk view survey

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/survey/nesciunt/view"
);

let params = {
    "fields[survey]": "optio",
    "filter[id]": "quidem",
    "sort": "aut",
    "page[number]": "12",
    "page[size]": "17",
    "include": "facilis",
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
<div id="execution-results-GETuser-survey--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-survey--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-survey--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-survey--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-survey--id--view"></code></pre>
</div>
<form id="form-GETuser-survey--id--view" data-method="GET" data-path="user/survey/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-survey--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-survey--id--view" onclick="tryItOut('GETuser-survey--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-survey--id--view" onclick="cancelTryOut('GETuser-survey--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-survey--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/survey/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-survey--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-survey--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETuser-survey--id--view" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[survey]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[survey]" data-endpoint="GETuser-survey--id--view" data-component="query"  hidden>
<br>
select kolom 'id','user_id','kategori','close'
,'judul','keterangan','file_panduan'</p>
<p>
<b><code>filter[id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[id]" data-endpoint="GETuser-survey--id--view" data-component="query"  hidden>
<br>
Filter by id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-survey--id--view" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-survey--id--view" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-survey--id--view" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-survey--id--view" data-component="query"  hidden>
<br>
get data relasi (dataUser,dataSoal,dataJawaban).</p>
</form>


## Create Survey
untuk create survey

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/survey/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('kategori', 'quam');
body.append('close', 'aliquid');
body.append('judul', 'minima');
body.append('keterangan', 'dolor');
body.append('objFile', document.querySelector('input[name="objFile"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTuser-survey-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-survey-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-survey-create"></code></pre>
</div>
<div id="execution-error-POSTuser-survey-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-survey-create"></code></pre>
</div>
<form id="form-POSTuser-survey-create" data-method="POST" data-path="user/survey/create" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-survey-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-survey-create" onclick="tryItOut('POSTuser-survey-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-survey-create" onclick="cancelTryOut('POSTuser-survey-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-survey-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/survey/create</code></b>
</p>
<p>
<label id="auth-POSTuser-survey-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-survey-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="kategori" data-endpoint="POSTuser-survey-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>close</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="close" data-endpoint="POSTuser-survey-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="judul" data-endpoint="POSTuser-survey-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>keterangan</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="keterangan" data-endpoint="POSTuser-survey-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>objFile</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="objFile" data-endpoint="POSTuser-survey-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## Update Survey
untuk update survey

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/survey/delectus/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('kategori', 'nihil');
body.append('close', 'officia');
body.append('judul', 'culpa');
body.append('keterangan', 'nisi');
body.append('objFile', document.querySelector('input[name="objFile"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTuser-survey--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-survey--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-survey--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-survey--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-survey--id--update"></code></pre>
</div>
<form id="form-POSTuser-survey--id--update" data-method="POST" data-path="user/survey/{id}/update" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-survey--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-survey--id--update" onclick="tryItOut('POSTuser-survey--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-survey--id--update" onclick="cancelTryOut('POSTuser-survey--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-survey--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/survey/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-survey--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-survey--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTuser-survey--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="kategori" data-endpoint="POSTuser-survey--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>close</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="close" data-endpoint="POSTuser-survey--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="judul" data-endpoint="POSTuser-survey--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>keterangan</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="keterangan" data-endpoint="POSTuser-survey--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>objFile</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="objFile" data-endpoint="POSTuser-survey--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Survey
untuk delete survey

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/survey/voluptatum/delete"
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


<div id="execution-results-POSTuser-survey--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-survey--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-survey--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-survey--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-survey--id--delete"></code></pre>
</div>
<form id="form-POSTuser-survey--id--delete" data-method="POST" data-path="user/survey/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-survey--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-survey--id--delete" onclick="tryItOut('POSTuser-survey--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-survey--id--delete" onclick="cancelTryOut('POSTuser-survey--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-survey--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/survey/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-survey--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-survey--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTuser-survey--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## Survey response by me

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/survey/response-by-me"
);

let params = {
    "page": "19",
    "per_page": "quas",
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
<div id="execution-results-GETuser-survey-response-by-me" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-survey-response-by-me"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-survey-response-by-me"></code></pre>
</div>
<div id="execution-error-GETuser-survey-response-by-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-survey-response-by-me"></code></pre>
</div>
<form id="form-GETuser-survey-response-by-me" data-method="GET" data-path="user/survey/response-by-me" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-survey-response-by-me', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-survey-response-by-me" onclick="tryItOut('GETuser-survey-response-by-me');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-survey-response-by-me" onclick="cancelTryOut('GETuser-survey-response-by-me');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-survey-response-by-me" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/survey/response-by-me</code></b>
</p>
<p>
<label id="auth-GETuser-survey-response-by-me" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-survey-response-by-me" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETuser-survey-response-by-me" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="per_page" data-endpoint="GETuser-survey-response-by-me" data-component="query"  hidden>
<br>
inte optional</p>
</form>


## Survey soal delete soal

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/soal/10/delete"
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
<div id="execution-results-GETuser-soal--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-soal--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-soal--id--delete"></code></pre>
</div>
<div id="execution-error-GETuser-soal--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-soal--id--delete"></code></pre>
</div>
<form id="form-GETuser-soal--id--delete" data-method="GET" data-path="user/soal/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-soal--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-soal--id--delete" onclick="tryItOut('GETuser-soal--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-soal--id--delete" onclick="cancelTryOut('GETuser-soal--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-soal--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/soal/{id}/delete</code></b>
</p>
<p>
<label id="auth-GETuser-soal--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-soal--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-soal--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## Create soal &amp; pilihan

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/soal/pilihan"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 15,
    "survey_id": 3,
    "tipe": "mollitia",
    "soal": "nisi",
    "pilihan": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-soal-pilihan" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-soal-pilihan"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-soal-pilihan"></code></pre>
</div>
<div id="execution-error-POSTuser-soal-pilihan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-soal-pilihan"></code></pre>
</div>
<form id="form-POSTuser-soal-pilihan" data-method="POST" data-path="user/soal/pilihan" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-soal-pilihan', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-soal-pilihan" onclick="tryItOut('POSTuser-soal-pilihan');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-soal-pilihan" onclick="cancelTryOut('POSTuser-soal-pilihan');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-soal-pilihan" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/soal/pilihan</code></b>
</p>
<p>
<label id="auth-POSTuser-soal-pilihan" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-soal-pilihan" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-soal-pilihan" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>survey_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="survey_id" data-endpoint="POSTuser-soal-pilihan" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>tipe</code></b>&nbsp;&nbsp;<small>enum</small>  &nbsp;
<input type="text" name="tipe" data-endpoint="POSTuser-soal-pilihan" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>soal</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="soal" data-endpoint="POSTuser-soal-pilihan" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>pilihan</code></b>&nbsp;&nbsp;<small>array</small>     <i>optional</i> &nbsp;
<input type="text" name="pilihan" data-endpoint="POSTuser-soal-pilihan" data-component="body"  hidden>
<br>
</p>

</form>



