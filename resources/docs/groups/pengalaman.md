# Pengalaman


## MyPengalaman

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/pengalaman"
);

let params = {
    "fields[pengalaman]": "ullam",
    "filter[user_id]": "adipisci",
    "sort": "et",
    "page[number]": "12",
    "page[size]": "14",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

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
            "id": 2,
            "portfolio": "Project Based",
            "project_kategori": "a",
            "service_kategori": "as",
            "klien": "test",
            "klien_kategori": "child",
            "lokasi": "bdg",
            "member": 5,
            "role": "y",
            "start_date": "2000-02-15",
            "end_date": "2000-01-02",
            "deskripsi": "sadasdasd"
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/user\/pengalaman?fields%5Bpengalaman%5D=&filter%5Buser_id%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/user\/pengalaman?fields%5Bpengalaman%5D=&filter%5Buser_id%5D=&sort=&page%5Bnumber%5D=&page%5Bsize%5D=&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/user\/pengalaman",
        "per_page": 15,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-POSTuser-pengalaman" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-pengalaman"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-pengalaman"></code></pre>
</div>
<div id="execution-error-POSTuser-pengalaman" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-pengalaman"></code></pre>
</div>
<form id="form-POSTuser-pengalaman" data-method="POST" data-path="user/pengalaman" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-pengalaman', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-pengalaman" onclick="tryItOut('POSTuser-pengalaman');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-pengalaman" onclick="cancelTryOut('POSTuser-pengalaman');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-pengalaman" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/pengalaman</code></b>
</p>
<p>
<label id="auth-POSTuser-pengalaman" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-pengalaman" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[pengalaman]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[pengalaman]" data-endpoint="POSTuser-pengalaman" data-component="query"  hidden>
<br>
select kolom 'user_id','portfolio','project_kategori','service_kategori','klien','klien_kategori','lokasi',
'member','role','start_date','end_date','deskripsi'</p>
<p>
<b><code>filter[user_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[user_id]" data-endpoint="POSTuser-pengalaman" data-component="query"  hidden>
<br>
Filter by 'user_id','portfolio','project_kategori','service_kategori','klien','klien_kategori','lokasi',
'member','role','start_date','end_date','deskripsi'</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="POSTuser-pengalaman" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="POSTuser-pengalaman" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="POSTuser-pengalaman" data-component="query"  hidden>
<br>
optional</p>
</form>


## Create Pengalaman
untuk create pengalaman

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/pengalaman/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "portfolio": "ut",
    "project_kategori": "harum",
    "service_kategori": "eos",
    "klien": "porro",
    "klien_kategori": "omnis",
    "lokasi": "et",
    "member": 13,
    "role": "hic",
    "start_date": "asperiores",
    "end_date": "ipsam",
    "deskripsi": "aut"
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
        "id": 2,
        "portfolio": "Project Based",
        "project_kategori": "a",
        "service_kategori": "as",
        "klien": "test",
        "klien_kategori": "child",
        "lokasi": "bdg",
        "member": "5",
        "role": "y",
        "start_date": "2000\/2\/15",
        "end_date": "2000\/1\/02",
        "deskripsi": "sadasdasd"
    }
}
```
<div id="execution-results-POSTuser-pengalaman-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-pengalaman-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-pengalaman-create"></code></pre>
</div>
<div id="execution-error-POSTuser-pengalaman-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-pengalaman-create"></code></pre>
</div>
<form id="form-POSTuser-pengalaman-create" data-method="POST" data-path="user/pengalaman/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-pengalaman-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-pengalaman-create" onclick="tryItOut('POSTuser-pengalaman-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-pengalaman-create" onclick="cancelTryOut('POSTuser-pengalaman-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-pengalaman-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/pengalaman/create</code></b>
</p>
<p>
<label id="auth-POSTuser-pengalaman-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-pengalaman-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>portfolio</code></b>&nbsp;&nbsp;<small>enum</small>  &nbsp;
<input type="text" name="portfolio" data-endpoint="POSTuser-pengalaman-create" data-component="body" required  hidden>
<br>
'Project Based', 'Individual Based'</p>
<p>
<b><code>project_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="project_kategori" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>service_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="service_kategori" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>klien</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="klien" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>klien_kategori</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="klien_kategori" data-endpoint="POSTuser-pengalaman-create" data-component="body" required  hidden>
<br>
'child','teenager','adult','the elderly'</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lokasi" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>member</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="member" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="role" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="start_date" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="end_date" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>text</small>     <i>optional</i> &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTuser-pengalaman-create" data-component="body"  hidden>
<br>
optional</p>

</form>


## Update Pengalaman
untuk update pengalaman

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/pengalaman/16/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "portfolio": "nihil",
    "project_kategori": "aut",
    "service_kategori": "quos",
    "klien": "ad",
    "klien_kategori": "atque",
    "lokasi": "dolorem",
    "member": 20,
    "role": "voluptates",
    "start_date": "error",
    "end_date": "necessitatibus",
    "deskripsi": "maxime"
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
    "message": "Artikel berhasil diupdate",
    "data": {
        "id": 1,
        "portfolio": "Individual Based",
        "project_kategori": "a",
        "service_kategori": "asdsa",
        "klien": "test",
        "klien_kategori": "child",
        "lokasi": "bdg",
        "member": 5,
        "role": "y",
        "start_date": "2000-02-15",
        "end_date": "2000-01-02",
        "deskripsi": "sadasdasd"
    }
}
```
<div id="execution-results-POSTuser-pengalaman--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-pengalaman--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-pengalaman--id--update"></code></pre>
</div>
<div id="execution-error-POSTuser-pengalaman--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-pengalaman--id--update"></code></pre>
</div>
<form id="form-POSTuser-pengalaman--id--update" data-method="POST" data-path="user/pengalaman/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-pengalaman--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-pengalaman--id--update" onclick="tryItOut('POSTuser-pengalaman--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-pengalaman--id--update" onclick="cancelTryOut('POSTuser-pengalaman--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-pengalaman--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/pengalaman/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTuser-pengalaman--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-pengalaman--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-pengalaman--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>portfolio</code></b>&nbsp;&nbsp;<small>enum</small>     <i>optional</i> &nbsp;
<input type="text" name="portfolio" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional 'Project Based', 'Individual Based'</p>
<p>
<b><code>project_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="project_kategori" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>service_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="service_kategori" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>klien</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="klien" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>klien_kategori</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="klien_kategori" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional 'child','teenager','adult','the elderly'</p>
<p>
<b><code>lokasi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="lokasi" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>member</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="member" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>role</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="role" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>start_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="start_date" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>end_date</code></b>&nbsp;&nbsp;<small>date</small>     <i>optional</i> &nbsp;
<input type="text" name="end_date" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>
<p>
<b><code>deskripsi</code></b>&nbsp;&nbsp;<small>text</small>     <i>optional</i> &nbsp;
<input type="text" name="deskripsi" data-endpoint="POSTuser-pengalaman--id--update" data-component="body"  hidden>
<br>
optional</p>

</form>


## Delete Pengalaman
untuk hapus pengalaman

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/pengalaman/2/delete"
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
    "message": "Data Pengalaman berhasil dihapus"
}
```
<div id="execution-results-POSTuser-pengalaman--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-pengalaman--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-pengalaman--id--delete"></code></pre>
</div>
<div id="execution-error-POSTuser-pengalaman--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-pengalaman--id--delete"></code></pre>
</div>
<form id="form-POSTuser-pengalaman--id--delete" data-method="POST" data-path="user/pengalaman/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-pengalaman--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-pengalaman--id--delete" onclick="tryItOut('POSTuser-pengalaman--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-pengalaman--id--delete" onclick="cancelTryOut('POSTuser-pengalaman--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-pengalaman--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/pengalaman/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTuser-pengalaman--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-pengalaman--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-pengalaman--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



