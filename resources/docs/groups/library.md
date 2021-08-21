# Library


## Private Artikel
untuk artikel yang diprivate

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel/private"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "per_page": 19,
    "page": 5
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
    "data": [
        {
            "id": 1,
            "kategori_id": null,
            "judul": "1judul",
            "isi": "",
            "image": null,
            "user_id": 1,
            "views": 0,
            "created_at": null,
            "updated_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/user\/artikel\/public?fields%5Bartikel%5D=&filter%5Bnama_kategori%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/user\/artikel\/public?fields%5Bartikel%5D=&filter%5Bnama_kategori%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/user\/artikel\/public",
        "per_page": 15,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-POSTuser-artikel-private" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel-private"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel-private"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel-private" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel-private"></code></pre>
</div>
<form id="form-POSTuser-artikel-private" data-method="POST" data-path="user/artikel/private" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel-private', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel-private" onclick="tryItOut('POSTuser-artikel-private');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel-private" onclick="cancelTryOut('POSTuser-artikel-private');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel-private" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel/private</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel-private" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel-private" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="per_page" data-endpoint="POSTuser-artikel-private" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="page" data-endpoint="POSTuser-artikel-private" data-component="body" required  hidden>
<br>
</p>

</form>


## Publik Artikel
untuk artikel yang dishare

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel/public"
);

let params = {
    "fields[artikel]": "dolor",
    "filter[nama_kategori]": "veritatis",
    "sort": "similique",
    "page[number]": "2",
    "page[size]": "7",
    "include": "et",
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
            "kategori_id": null,
            "judul": "1judul",
            "isi": "",
            "image": null,
            "user_id": 1,
            "views": 0,
            "created_at": null,
            "updated_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/user\/artikel\/public?fields%5Bartikel%5D=&filter%5Bnama_kategori%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/user\/artikel\/public?fields%5Bartikel%5D=&filter%5Bnama_kategori%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/user\/artikel\/public",
        "per_page": 15,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETuser-artikel-public" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-artikel-public"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-artikel-public"></code></pre>
</div>
<div id="execution-error-GETuser-artikel-public" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-artikel-public"></code></pre>
</div>
<form id="form-GETuser-artikel-public" data-method="GET" data-path="user/artikel/public" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-artikel-public', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-artikel-public" onclick="tryItOut('GETuser-artikel-public');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-artikel-public" onclick="cancelTryOut('GETuser-artikel-public');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-artikel-public" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/artikel/public</code></b>
</p>
<p>
<label id="auth-GETuser-artikel-public" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-artikel-public" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[artikel]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[artikel]" data-endpoint="GETuser-artikel-public" data-component="query"  hidden>
<br>
select kolom 'nama_kategori','judul','isi','image','user_id','views','visible'</p>
<p>
<b><code>filter[nama_kategori]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_kategori]" data-endpoint="GETuser-artikel-public" data-component="query"  hidden>
<br>
Filter by nama nama_kategori.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-artikel-public" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-artikel-public" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-artikel-public" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-artikel-public" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
</form>


## View Artikel
untuk view artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel/10/view"
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
    "data": {
        "id": null,
        "nama_kategori": null,
        "judul": null,
        "isi": null,
        "image": null,
        "user_id": null,
        "views": null,
        "visible": null,
        "created_at": null,
        "updated_at": null
    }
}
```
<div id="execution-results-GETuser-artikel--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-artikel--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-artikel--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-artikel--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-artikel--id--view"></code></pre>
</div>
<form id="form-GETuser-artikel--id--view" data-method="GET" data-path="user/artikel/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-artikel--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-artikel--id--view" onclick="tryItOut('GETuser-artikel--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-artikel--id--view" onclick="cancelTryOut('GETuser-artikel--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-artikel--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/artikel/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-artikel--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-artikel--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-artikel--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## My Artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel"
);

let params = {
    "fields[artikel]": "ut",
    "filter[nama]": "magnam",
    "sort": "dolorem",
    "page[number]": "18",
    "page[size]": "17",
    "include": "deserunt",
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
            "kategori_id": 1,
            "judul": "1judul",
            "isi": "",
            "image": null,
            "user_id": 1,
            "views": 0,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "kategori_id": 1,
            "judul": "asdas",
            "isi": "asdas",
            "image": null,
            "user_id": 1,
            "views": 0,
            "created_at": null,
            "updated_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/user\/artikel?page%5Bnumber%5D=1&page%5Bsize%5D=2&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/user\/artikel?page%5Bnumber%5D=1&page%5Bsize%5D=2&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/user\/artikel",
        "per_page": 2,
        "to": 2,
        "total": 2
    }
}
```
<div id="execution-results-GETuser-artikel" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-artikel"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-artikel"></code></pre>
</div>
<div id="execution-error-GETuser-artikel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-artikel"></code></pre>
</div>
<form id="form-GETuser-artikel" data-method="GET" data-path="user/artikel" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-artikel', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-artikel" onclick="tryItOut('GETuser-artikel');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-artikel" onclick="cancelTryOut('GETuser-artikel');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-artikel" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/artikel</code></b>
</p>
<p>
<label id="auth-GETuser-artikel" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-artikel" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[artikel]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[artikel]" data-endpoint="GETuser-artikel" data-component="query"  hidden>
<br>
select kolom 'nama_kategori','judul','isi','image','user_id','views'</p>
<p>
<b><code>filter[nama]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama]" data-endpoint="GETuser-artikel" data-component="query"  hidden>
<br>
Filter by 'nama_kategori','judul','isi','image','user_id','views'</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-artikel" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-artikel" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-artikel" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-artikel" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
</form>


## Create Artikel
untuk create artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('nama_kategori', 'neque');
body.append('judul', 'iure');
body.append('isi', 'qui');
body.append('visible', 'neque');
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
        "id": 13,
        "kategori_id": "1",
        "judul": "judul13",
        "isi": "isi123",
        "image": null,
        "user_id": 1,
        "views": null,
        "created_at": "2021-02-24T02:59:17.000000Z",
        "updated_at": "2021-02-24T02:59:17.000000Z"
    }
}
```
<div id="execution-results-POSTuser-artikel-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel-create"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel-create"></code></pre>
</div>
<form id="form-POSTuser-artikel-create" data-method="POST" data-path="user/artikel/create" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel-create" onclick="tryItOut('POSTuser-artikel-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel-create" onclick="cancelTryOut('POSTuser-artikel-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel/create</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTuser-artikel-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="judul" data-endpoint="POSTuser-artikel-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>isi</code></b>&nbsp;&nbsp;<small>text</small>  &nbsp;
<input type="text" name="isi" data-endpoint="POSTuser-artikel-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>visible</code></b>&nbsp;&nbsp;<small>enum</small>  &nbsp;
<input type="text" name="visible" data-endpoint="POSTuser-artikel-create" data-component="body" required  hidden>
<br>
('public','private')</p>
<p>
<b><code>objImage</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="objImage" data-endpoint="POSTuser-artikel-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## Update artikel
untuk update artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel/2/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('nama_kategori', 'consequatur');
body.append('judul', 'deserunt');
body.append('isi', 'cupiditate');
body.append('visible', 'maxime');
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
    "message": "Artikel berhasil diupdate",
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
<div id="execution-results-POSTuser-artikel--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel--id--update"></code></pre>
</div>
<form id="form-POSTuser-artikel--id--update" data-method="POST" data-path="user/artikel/{id}/update" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel--id--update" onclick="tryItOut('POSTuser-artikel--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel--id--update" onclick="cancelTryOut('POSTuser-artikel--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-artikel--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_kategori" data-endpoint="POSTuser-artikel--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="judul" data-endpoint="POSTuser-artikel--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>isi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="isi" data-endpoint="POSTuser-artikel--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="image" data-endpoint="POSTuser-artikel--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>visible</code></b>&nbsp;&nbsp;<small>enum</small>  &nbsp;
<input type="text" name="visible" data-endpoint="POSTuser-artikel--id--update" data-component="body" required  hidden>
<br>
('public','private')</p>

</form>


## Delete Artikel
untuk delete artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel/14/delete"
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
    "message": "Data Artikel berhasil dihapus"
}
```
<div id="execution-results-POSTuser-artikel--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel--id--delete"></code></pre>
</div>
<form id="form-POSTuser-artikel--id--delete" data-method="POST" data-path="user/artikel/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel--id--delete" onclick="tryItOut('POSTuser-artikel--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel--id--delete" onclick="cancelTryOut('POSTuser-artikel--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-artikel--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## List Kategori Artikel
untuk list kategori artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel-kategori"
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
[
    {
        "nama": "Psikologi Industri",
        "created_at": "2021-03-01T02:56:36.000000Z",
        "updated_at": "2021-03-01T02:56:39.000000Z"
    },
    {
        "nama": "Psikologi Klinis",
        "created_at": "2021-03-01T02:56:05.000000Z",
        "updated_at": "2021-03-01T02:56:08.000000Z"
    },
    {
        "nama": "Psikologi Pendidikan",
        "created_at": "2021-03-01T02:56:49.000000Z",
        "updated_at": "2021-03-01T02:56:51.000000Z"
    }
]
```
<div id="execution-results-POSTuser-artikel-kategori" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel-kategori"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel-kategori"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel-kategori" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel-kategori"></code></pre>
</div>
<form id="form-POSTuser-artikel-kategori" data-method="POST" data-path="user/artikel-kategori" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel-kategori', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel-kategori" onclick="tryItOut('POSTuser-artikel-kategori');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel-kategori" onclick="cancelTryOut('POSTuser-artikel-kategori');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel-kategori" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel-kategori</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel-kategori" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel-kategori" data-component="header"></label>
</p>
</form>


## Create Kategori Artikel
untuk create kategori artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel-kategori/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "sit"
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
        "nama": "asdasdsad"
    }
}
```
<div id="execution-results-POSTuser-artikel-kategori-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel-kategori-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel-kategori-create"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel-kategori-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel-kategori-create"></code></pre>
</div>
<form id="form-POSTuser-artikel-kategori-create" data-method="POST" data-path="user/artikel-kategori/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel-kategori-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel-kategori-create" onclick="tryItOut('POSTuser-artikel-kategori-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel-kategori-create" onclick="cancelTryOut('POSTuser-artikel-kategori-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel-kategori-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel-kategori/create</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel-kategori-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel-kategori-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTuser-artikel-kategori-create" data-component="body" required  hidden>
<br>
</p>

</form>


## Update Kategori Artikel
untuk update kategori artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel-kategori/error/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "consequatur"
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
    "message": "Berhasil update kategori artikel",
    "data": 1
}
```
<div id="execution-results-POSTuser-artikel-kategori--nama--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel-kategori--nama--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel-kategori--nama--update"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel-kategori--nama--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel-kategori--nama--update"></code></pre>
</div>
<form id="form-POSTuser-artikel-kategori--nama--update" data-method="POST" data-path="user/artikel-kategori/{nama}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel-kategori--nama--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel-kategori--nama--update" onclick="tryItOut('POSTuser-artikel-kategori--nama--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel-kategori--nama--update" onclick="cancelTryOut('POSTuser-artikel-kategori--nama--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel-kategori--nama--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel-kategori/{nama}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel-kategori--nama--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel-kategori--nama--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTuser-artikel-kategori--nama--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTuser-artikel-kategori--nama--update" data-component="body" required  hidden>
<br>
</p>

</form>


## Delete Kategori Artikel
untuk hapus kategori artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel-kategori/voluptatum/delete"
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
    "message": "Berhasil hapus kategori artikel",
    "data": 1
}
```
<div id="execution-results-POSTuser-artikel-kategori--nama--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel-kategori--nama--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel-kategori--nama--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel-kategori--nama--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel-kategori--nama--delete"></code></pre>
</div>
<form id="form-POSTuser-artikel-kategori--nama--delete" data-method="POST" data-path="user/artikel-kategori/{nama}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel-kategori--nama--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel-kategori--nama--delete" onclick="tryItOut('POSTuser-artikel-kategori--nama--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel-kategori--nama--delete" onclick="cancelTryOut('POSTuser-artikel-kategori--nama--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel-kategori--nama--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel-kategori/{nama}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel-kategori--nama--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel-kategori--nama--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTuser-artikel-kategori--nama--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## Like Artikel
untuk like artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel/like"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 5
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-artikel-like" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel-like"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel-like"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel-like" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel-like"></code></pre>
</div>
<form id="form-POSTuser-artikel-like" data-method="POST" data-path="user/artikel/like" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel-like', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel-like" onclick="tryItOut('POSTuser-artikel-like');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel-like" onclick="cancelTryOut('POSTuser-artikel-like');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel-like" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel/like</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel-like" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel-like" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-artikel-like" data-component="body" required  hidden>
<br>
</p>

</form>


## Unlike Artikel
untuk unlike artikel

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/artikel/unlike"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 18
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-artikel-unlike" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-artikel-unlike"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-artikel-unlike"></code></pre>
</div>
<div id="execution-error-POSTuser-artikel-unlike" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-artikel-unlike"></code></pre>
</div>
<form id="form-POSTuser-artikel-unlike" data-method="POST" data-path="user/artikel/unlike" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-artikel-unlike', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-artikel-unlike" onclick="tryItOut('POSTuser-artikel-unlike');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-artikel-unlike" onclick="cancelTryOut('POSTuser-artikel-unlike');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-artikel-unlike" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/artikel/unlike</code></b>
</p>
<p>
<label id="auth-POSTuser-artikel-unlike" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-artikel-unlike" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-artikel-unlike" data-component="body" required  hidden>
<br>
</p>

</form>


## Private Ebook
untuk artikel yang diprivate

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook/private"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "per_page": 17,
    "page": 1
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "kategori_id": null,
            "judul": "1judul",
            "isi": "",
            "image": null,
            "user_id": 1,
            "views": 0,
            "created_at": null,
            "updated_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/user\/artikel\/public?fields%5Bartikel%5D=&filter%5Bnama_kategori%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/user\/artikel\/public?fields%5Bartikel%5D=&filter%5Bnama_kategori%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/user\/artikel\/public",
        "per_page": 15,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETuser-ebook-private" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-ebook-private"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-ebook-private"></code></pre>
</div>
<div id="execution-error-GETuser-ebook-private" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-ebook-private"></code></pre>
</div>
<form id="form-GETuser-ebook-private" data-method="GET" data-path="user/ebook/private" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-ebook-private', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-ebook-private" onclick="tryItOut('GETuser-ebook-private');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-ebook-private" onclick="cancelTryOut('GETuser-ebook-private');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-ebook-private" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/ebook/private</code></b>
</p>
<p>
<label id="auth-GETuser-ebook-private" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-ebook-private" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="per_page" data-endpoint="GETuser-ebook-private" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="page" data-endpoint="GETuser-ebook-private" data-component="body" required  hidden>
<br>
</p>

</form>


## Public Ebook
untuk ebook yang dishare

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook/public"
);

let params = {
    "fields[artikel]": "recusandae",
    "filter[nama_kategori]": "officia",
    "sort": "voluptatem",
    "page[number]": "13",
    "page[size]": "4",
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
            "kategori_id": null,
            "judul": "1judul",
            "isi": "",
            "image": null,
            "user_id": 1,
            "views": 0,
            "created_at": null,
            "updated_at": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/user\/artikel\/public?fields%5Bartikel%5D=&filter%5Bnama_kategori%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/user\/artikel\/public?fields%5Bartikel%5D=&filter%5Bnama_kategori%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/user\/artikel\/public",
        "per_page": 15,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETuser-ebook-public" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-ebook-public"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-ebook-public"></code></pre>
</div>
<div id="execution-error-GETuser-ebook-public" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-ebook-public"></code></pre>
</div>
<form id="form-GETuser-ebook-public" data-method="GET" data-path="user/ebook/public" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-ebook-public', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-ebook-public" onclick="tryItOut('GETuser-ebook-public');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-ebook-public" onclick="cancelTryOut('GETuser-ebook-public');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-ebook-public" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/ebook/public</code></b>
</p>
<p>
<label id="auth-GETuser-ebook-public" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-ebook-public" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[artikel]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[artikel]" data-endpoint="GETuser-ebook-public" data-component="query"  hidden>
<br>
select kolom 'bidang_id','judul','isi','image','user_id','views','visible'</p>
<p>
<b><code>filter[nama_kategori]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_kategori]" data-endpoint="GETuser-ebook-public" data-component="query"  hidden>
<br>
Filter by nama nama_kategori.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-ebook-public" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-ebook-public" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-ebook-public" data-component="query"  hidden>
<br>
oprional</p>
</form>


## My Ebook

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook"
);

let params = {
    "fields[ebook]": "nesciunt",
    "filter[judul]": "corporis",
    "sort": "aut",
    "page[number]": "19",
    "page[size]": "17",
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
            "id": 3,
            "user_id": 3,
            "judul": "dasdad",
            "author": "",
            "synopsis": null,
            "visible": "private",
            "bidang_id": 0,
            "file": null,
            "image": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/user\/ebook?page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/user\/ebook?page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/user\/ebook",
        "per_page": 100,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETuser-ebook" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-ebook"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-ebook"></code></pre>
</div>
<div id="execution-error-GETuser-ebook" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-ebook"></code></pre>
</div>
<form id="form-GETuser-ebook" data-method="GET" data-path="user/ebook" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-ebook', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-ebook" onclick="tryItOut('GETuser-ebook');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-ebook" onclick="cancelTryOut('GETuser-ebook');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-ebook" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/ebook</code></b>
</p>
<p>
<label id="auth-GETuser-ebook" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-ebook" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[ebook]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[ebook]" data-endpoint="GETuser-ebook" data-component="query"  hidden>
<br>
select kolom 'judul','author','synopsis','visible','bidang_id','file','image'</p>
<p>
<b><code>filter[judul]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[judul]" data-endpoint="GETuser-ebook" data-component="query"  hidden>
<br>
Filter by 'judul'</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-ebook" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-ebook" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-ebook" data-component="query"  hidden>
<br>
optional</p>
</form>


## View Ebook
untuk view ebook

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook/6/view"
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
    "data": {
        "id": null,
        "user_id": null,
        "judul": null,
        "author": null,
        "synopsis": null,
        "visible": null,
        "bidang_id": null,
        "file": null,
        "image": null,
        "created_at": null,
        "nama": null,
        "nama_lengkap": null,
        "email": null,
        "photo_profile": null
    }
}
```
<div id="execution-results-GETuser-ebook--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-ebook--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-ebook--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-ebook--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-ebook--id--view"></code></pre>
</div>
<form id="form-GETuser-ebook--id--view" data-method="GET" data-path="user/ebook/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-ebook--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-ebook--id--view" onclick="tryItOut('GETuser-ebook--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-ebook--id--view" onclick="cancelTryOut('GETuser-ebook--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-ebook--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/ebook/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-ebook--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-ebook--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser-ebook--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## Create Ebook
untuk create ebook

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('judul', 'qui');
body.append('author', 'ullam');
body.append('synopsis', 'tenetur');
body.append('visible', 'reprehenderit');
body.append('bidang_id', '7');
body.append('file', document.querySelector('input[name="file"]').files[0]);
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
    "message": "data berhasil disimpan!",
    "data": {
        "id": 3,
        "user_id": 3,
        "judul": "placeat",
        "author": "dolor",
        "synopsis": "fuga",
        "visible": "private",
        "bidang_id": "7",
        "file": null,
        "image": null
    }
}
```
<div id="execution-results-POSTuser-ebook-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-ebook-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-ebook-create"></code></pre>
</div>
<div id="execution-error-POSTuser-ebook-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-ebook-create"></code></pre>
</div>
<form id="form-POSTuser-ebook-create" data-method="POST" data-path="user/ebook/create" data-authed="1" data-hasfiles="2" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-ebook-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-ebook-create" onclick="tryItOut('POSTuser-ebook-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-ebook-create" onclick="cancelTryOut('POSTuser-ebook-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-ebook-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/ebook/create</code></b>
</p>
<p>
<label id="auth-POSTuser-ebook-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-ebook-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="judul" data-endpoint="POSTuser-ebook-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="author" data-endpoint="POSTuser-ebook-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>synopsis</code></b>&nbsp;&nbsp;<small>text</small>     <i>optional</i> &nbsp;
<input type="text" name="synopsis" data-endpoint="POSTuser-ebook-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>visible</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="visible" data-endpoint="POSTuser-ebook-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>bidang_id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="bidang_id" data-endpoint="POSTuser-ebook-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTuser-ebook-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="image" data-endpoint="POSTuser-ebook-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## Update Ebook
untuk update ebook

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook/8/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('judul', 'quidem');
body.append('author', 'consectetur');
body.append('synopsis', 'omnis');
body.append('visible', 'sint');
body.append('bidang_id', '18');
body.append('file', document.querySelector('input[name="file"]').files[0]);
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
    "message": "Ebook berhasil diupdate",
    "data": {
        "id": 3,
        "user_id": 3,
        "judul": "blanditiis",
        "author": "possimus",
        "synopsis": "corrupti",
        "visible": "private",
        "bidang_id": "11",
        "file": null,
        "image": null
    }
}
```
<div id="execution-results-POSTuser-ebook--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-ebook--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-ebook--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-ebook--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-ebook--id--update"></code></pre>
</div>
<form id="form-POSTuser-ebook--id--update" data-method="POST" data-path="user/ebook/{id}/update" data-authed="1" data-hasfiles="2" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-ebook--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-ebook--id--update" onclick="tryItOut('POSTuser-ebook--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-ebook--id--update" onclick="cancelTryOut('POSTuser-ebook--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-ebook--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/ebook/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-ebook--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-ebook--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-ebook--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>judul</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="judul" data-endpoint="POSTuser-ebook--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>author</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="author" data-endpoint="POSTuser-ebook--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>synopsis</code></b>&nbsp;&nbsp;<small>text</small>     <i>optional</i> &nbsp;
<input type="text" name="synopsis" data-endpoint="POSTuser-ebook--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>visible</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="visible" data-endpoint="POSTuser-ebook--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>bidang_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="bidang_id" data-endpoint="POSTuser-ebook--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>file</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="file" data-endpoint="POSTuser-ebook--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="image" data-endpoint="POSTuser-ebook--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Ebook
untuk delete ebook

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook/20/delete"
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
    "message": "Data Ebook berhasil dihapus"
}
```
<div id="execution-results-POSTuser-ebook--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-ebook--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-ebook--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-ebook--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-ebook--id--delete"></code></pre>
</div>
<form id="form-POSTuser-ebook--id--delete" data-method="POST" data-path="user/ebook/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-ebook--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-ebook--id--delete" onclick="tryItOut('POSTuser-ebook--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-ebook--id--delete" onclick="cancelTryOut('POSTuser-ebook--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-ebook--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/ebook/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-ebook--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-ebook--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-ebook--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>


## Like Ebook
untuk like ebook

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook/like"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 12
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-ebook-like" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-ebook-like"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-ebook-like"></code></pre>
</div>
<div id="execution-error-POSTuser-ebook-like" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-ebook-like"></code></pre>
</div>
<form id="form-POSTuser-ebook-like" data-method="POST" data-path="user/ebook/like" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-ebook-like', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-ebook-like" onclick="tryItOut('POSTuser-ebook-like');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-ebook-like" onclick="cancelTryOut('POSTuser-ebook-like');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-ebook-like" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/ebook/like</code></b>
</p>
<p>
<label id="auth-POSTuser-ebook-like" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-ebook-like" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-ebook-like" data-component="body" required  hidden>
<br>
</p>

</form>


## Unlike Ebook
untuk unlike ebook

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/ebook/unlike"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 2
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-ebook-unlike" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-ebook-unlike"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-ebook-unlike"></code></pre>
</div>
<div id="execution-error-POSTuser-ebook-unlike" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-ebook-unlike"></code></pre>
</div>
<form id="form-POSTuser-ebook-unlike" data-method="POST" data-path="user/ebook/unlike" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-ebook-unlike', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-ebook-unlike" onclick="tryItOut('POSTuser-ebook-unlike');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-ebook-unlike" onclick="cancelTryOut('POSTuser-ebook-unlike');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-ebook-unlike" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/ebook/unlike</code></b>
</p>
<p>
<label id="auth-POSTuser-ebook-unlike" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-ebook-unlike" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-ebook-unlike" data-component="body" required  hidden>
<br>
</p>

</form>



