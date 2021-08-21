# Psikolog


## List Psikolog
untuk list psikolog di halaman admin

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/admin/list-psikolog/vero/quasi"
);

let params = {
    "fields[users]": "aut",
    "filter[username]": "enim",
    "filter[nama_lengkap]": "tempore",
    "filter[kota1_id]": "ea",
    "filter[kota2_id]": "molestiae",
    "filter[bidang_id]": "quidem",
    "filter[universitas_id]": "sunt",
    "sort": "enim",
    "page[number]": "19",
    "page[size]": "1",
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
            "nama_lengkap": null,
            "tempat_lahir": null,
            "tanggal_lahir": null,
            "kota1_id": 1101,
            "kota2_id": null,
            "no_hp": null,
            "universitas_id": null,
            "jurusan_id": null,
            "bidang_id": 1,
            "tahun_masuk": null,
            "tahun_lulus": null,
            "nomor_ijazah": "12345678",
            "no_sipp": null,
            "skill_kompetensi": null,
            "profile_singkat": null,
            "jenis_kelamin": "Laki-laki",
            "photo_profile": null,
            "relationships": [
                {
                    "kota1": {
                        "data": {
                            "id": 1101,
                            "provinsi_id": 11,
                            "nama_kota": "Kab. Simeulue",
                            "kode_kota": null
                        }
                    }
                },
                {
                    "kota2": {
                        "data": null
                    }
                },
                {
                    "bidang": {
                        "data": {
                            "id": 1,
                            "nama": "Psikologi Klinis",
                            "created_at": null,
                            "updated_at": null
                        }
                    }
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/general\/all-psikolog?include=dataKota1%2CdataKota2%2CdataBidang&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/general\/all-psikolog?include=dataKota1%2CdataKota2%2CdataBidang&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/general\/all-psikolog",
        "per_page": 100,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETadmin-list-psikolog--type---value-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETadmin-list-psikolog--type---value-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETadmin-list-psikolog--type---value-"></code></pre>
</div>
<div id="execution-error-GETadmin-list-psikolog--type---value-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETadmin-list-psikolog--type---value-"></code></pre>
</div>
<form id="form-GETadmin-list-psikolog--type---value-" data-method="GET" data-path="admin/list-psikolog/{type}/{value}" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETadmin-list-psikolog--type---value-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETadmin-list-psikolog--type---value-" onclick="tryItOut('GETadmin-list-psikolog--type---value-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETadmin-list-psikolog--type---value-" onclick="cancelTryOut('GETadmin-list-psikolog--type---value-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETadmin-list-psikolog--type---value-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>admin/list-psikolog/{type}/{value}</code></b>
</p>
<p>
<label id="auth-GETadmin-list-psikolog--type---value-" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETadmin-list-psikolog--type---value-" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>type</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="type" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>value</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="value" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[users]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[users]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
select kolom 'kota1_id','kota2_id','bidang_id'</p>
<p>
<b><code>filter[username]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[username]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
Filter by username.</p>
<p>
<b><code>filter[nama_lengkap]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_lengkap]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
Filter by nama lengkap.</p>
<p>
<b><code>filter[kota1_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kota1_id]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
Filter by kota 1.</p>
<p>
<b><code>filter[kota2_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kota2_id]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
Filter by kota 2.</p>
<p>
<b><code>filter[bidang_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[bidang_id]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
Filter by bidang id.</p>
<p>
<b><code>filter[universitas_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[universitas_id]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
Filter by universitas id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETadmin-list-psikolog--type---value-" data-component="query"  hidden>
<br>
oprional</p>
</form>


## view psikolog
untuk view psikolog

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/17/view"
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
    "data": "data"
}
```
<div id="execution-results-GETuser--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser--id--view"></code></pre>
</div>
<div id="execution-error-GETuser--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser--id--view"></code></pre>
</div>
<form id="form-GETuser--id--view" data-method="GET" data-path="user/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser--id--view" onclick="tryItOut('GETuser--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser--id--view" onclick="cancelTryOut('GETuser--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETuser--id--view" data-component="url" required  hidden>
<br>
id user</p>
</form>


## view psikolog username
untuk view psikolog username

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/in/view/username"
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
    "data": "data"
}
```
<div id="execution-results-GETuser--username--view-username" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser--username--view-username"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser--username--view-username"></code></pre>
</div>
<div id="execution-error-GETuser--username--view-username" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser--username--view-username"></code></pre>
</div>
<form id="form-GETuser--username--view-username" data-method="GET" data-path="user/{username}/view/username" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser--username--view-username', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser--username--view-username" onclick="tryItOut('GETuser--username--view-username');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser--username--view-username" onclick="cancelTryOut('GETuser--username--view-username');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser--username--view-username" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/{username}/view/username</code></b>
</p>
<p>
<label id="auth-GETuser--username--view-username" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser--username--view-username" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="GETuser--username--view-username" data-component="url" required  hidden>
<br>
</p>
</form>


## photo profile
untuk upload foto profil

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/11/photo-profile"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('objPhoto', document.querySelector('input[name="objPhoto"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "status": "succes",
    "message": "Berhasil upload photo profil",
    "data": "data"
}
```
<div id="execution-results-POSTuser--id--photo-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser--id--photo-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser--id--photo-profile"></code></pre>
</div>
<div id="execution-error-POSTuser--id--photo-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser--id--photo-profile"></code></pre>
</div>
<form id="form-POSTuser--id--photo-profile" data-method="POST" data-path="user/{id}/photo-profile" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser--id--photo-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser--id--photo-profile" onclick="tryItOut('POSTuser--id--photo-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser--id--photo-profile" onclick="cancelTryOut('POSTuser--id--photo-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser--id--photo-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/{id}/photo-profile</code></b>
</p>
<p>
<label id="auth-POSTuser--id--photo-profile" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser--id--photo-profile" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser--id--photo-profile" data-component="url" required  hidden>
<br>
id user</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>objPhoto</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="objPhoto" data-endpoint="POSTuser--id--photo-profile" data-component="body" required  hidden>
<br>
</p>

</form>


## update profile
untuk update semua profil psikolog

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/11/profile"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('email', 'sunt');
body.append('role_id', '10');
body.append('status', '2');
body.append('api_token', 'aliquid');
body.append('remember_token', 'quas');
body.append('nama_lengkap', 'nam');
body.append('tempat_lahir', 'laboriosam');
body.append('kota1_id', '9');
body.append('kota2_id', '19');
body.append('no_hp', '7');
body.append('jurusan_profesi', 'nobis');
body.append('tahun_masuk', '14');
body.append('tahun_lulus', '15');
body.append('nomor_ijazah', 'odit');
body.append('no_sipp', '7');
body.append('bidang_id', '19');
body.append('skill_kompetensi', 'ducimus');
body.append('profile_singkat', 'voluptatem');
body.append('longitude', 'nesciunt');
body.append('latitude', 'voluptatem');
body.append('jenis_kelamin', 'cum');
body.append('agama', 'ipsa');
body.append('layanan', 'quo');
body.append('photo_profile', document.querySelector('input[name="photo_profile"]').files[0]);

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
    "message": "Berhasil update profile",
    "data": "data"
}
```
<div id="execution-results-POSTuser--id--profile" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser--id--profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser--id--profile"></code></pre>
</div>
<div id="execution-error-POSTuser--id--profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser--id--profile"></code></pre>
</div>
<form id="form-POSTuser--id--profile" data-method="POST" data-path="user/{id}/profile" data-authed="1" data-hasfiles="1" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser--id--profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser--id--profile" onclick="tryItOut('POSTuser--id--profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser--id--profile" onclick="cancelTryOut('POSTuser--id--profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser--id--profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/{id}/profile</code></b>
</p>
<p>
<label id="auth-POSTuser--id--profile" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser--id--profile" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser--id--profile" data-component="url" required  hidden>
<br>
id user</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>email</small>     <i>optional</i> &nbsp;
<input type="text" name="email" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>role_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="role_id" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>status</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="status" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>api_token</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="api_token" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>remember_token</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="remember_token" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nama_lengkap</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nama_lengkap" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tempat_lahir</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="tempat_lahir" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>kota1_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kota1_id" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>kota2_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="kota2_id" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>no_hp</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="no_hp" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>jurusan_profesi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="jurusan_profesi" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tahun_masuk</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tahun_masuk" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>tahun_lulus</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="tahun_lulus" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>nomor_ijazah</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="nomor_ijazah" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>no_sipp</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="no_sipp" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>bidang_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="bidang_id" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>skill_kompetensi</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="skill_kompetensi" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>profile_singkat</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="profile_singkat" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>longitude</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="longitude" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>latitude</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="latitude" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>jenis_kelamin</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="jenis_kelamin" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>photo_profile</code></b>&nbsp;&nbsp;<small>file</small>     <i>optional</i> &nbsp;
<input type="file" name="photo_profile" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>agama</code></b>&nbsp;&nbsp;<small>enum</small>     <i>optional</i> &nbsp;
<input type="text" name="agama" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>layanan</code></b>&nbsp;&nbsp;<small>enum</small>     <i>optional</i> &nbsp;
<input type="text" name="layanan" data-endpoint="POSTuser--id--profile" data-component="body"  hidden>
<br>
</p>

</form>


## Update Akun
untuk update akun

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/update-akun"
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


<div id="execution-results-POSTuser-update-akun" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-update-akun"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-update-akun"></code></pre>
</div>
<div id="execution-error-POSTuser-update-akun" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-update-akun"></code></pre>
</div>
<form id="form-POSTuser-update-akun" data-method="POST" data-path="user/update-akun" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-update-akun', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-update-akun" onclick="tryItOut('POSTuser-update-akun');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-update-akun" onclick="cancelTryOut('POSTuser-update-akun');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-update-akun" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/update-akun</code></b>
</p>
<p>
<label id="auth-POSTuser-update-akun" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-update-akun" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTuser-update-akun" data-component="url" required  hidden>
<br>
</p>
</form>


## My Profile
untuk melihan profile sendiri

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/my-profile"
);

let params = {
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
<div id="execution-results-GETuser-my-profile" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-my-profile"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-my-profile"></code></pre>
</div>
<div id="execution-error-GETuser-my-profile" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-my-profile"></code></pre>
</div>
<form id="form-GETuser-my-profile" data-method="GET" data-path="user/my-profile" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-my-profile', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-my-profile" onclick="tryItOut('GETuser-my-profile');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-my-profile" onclick="cancelTryOut('GETuser-my-profile');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-my-profile" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/my-profile</code></b>
</p>
<p>
<label id="auth-GETuser-my-profile" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-my-profile" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-my-profile" data-component="query"  hidden>
<br>
get data relasi (dataKota1,dataKota2,dataBidang,dataModerator,dataUniversitas,
dataJurusan,dataArtikel,dataEbook).</p>
</form>


## List Kolega
untuk list kolega

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/kolega"
);

let params = {
    "fields[users]": "veritatis",
    "filter[username]": "sapiente",
    "filter[nama_lengkap]": "ullam",
    "filter[kota1_id]": "nam",
    "filter[kota2_id]": "necessitatibus",
    "filter[bidang_id]": "in",
    "filter[universitas_id]": "sunt",
    "sort": "aliquam",
    "page[number]": "7",
    "page[size]": "7",
    "include": "sit",
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
            "nama_lengkap": null,
            "tempat_lahir": null,
            "tanggal_lahir": null,
            "kota1_id": 1101,
            "kota2_id": null,
            "no_hp": null,
            "universitas_id": null,
            "jurusan_id": null,
            "bidang_id": 1,
            "tahun_masuk": null,
            "tahun_lulus": null,
            "nomor_ijazah": "12345678",
            "no_sipp": null,
            "skill_kompetensi": null,
            "profile_singkat": null,
            "jenis_kelamin": "Laki-laki",
            "photo_profile": null,
            "relationships": [
                {
                    "kota1": {
                        "data": {
                            "id": 1101,
                            "provinsi_id": 11,
                            "nama_kota": "Kab. Simeulue",
                            "kode_kota": null
                        }
                    }
                },
                {
                    "kota2": {
                        "data": null
                    }
                },
                {
                    "bidang": {
                        "data": {
                            "id": 1,
                            "nama": "Psikologi Klinis",
                            "created_at": null,
                            "updated_at": null
                        }
                    }
                }
            ]
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/general\/all-psikolog?include=dataKota1%2CdataKota2%2CdataBidang&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/general\/all-psikolog?include=dataKota1%2CdataKota2%2CdataBidang&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/general\/all-psikolog",
        "per_page": 100,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETuser-kolega" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-kolega"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-kolega"></code></pre>
</div>
<div id="execution-error-GETuser-kolega" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-kolega"></code></pre>
</div>
<form id="form-GETuser-kolega" data-method="GET" data-path="user/kolega" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-kolega', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-kolega" onclick="tryItOut('GETuser-kolega');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-kolega" onclick="cancelTryOut('GETuser-kolega');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-kolega" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/kolega</code></b>
</p>
<p>
<label id="auth-GETuser-kolega" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-kolega" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[users]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[users]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
select kolom 'kota1_id','kota2_id','bidang_id'</p>
<p>
<b><code>filter[username]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[username]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
Filter by username.</p>
<p>
<b><code>filter[nama_lengkap]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_lengkap]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
Filter by nama lengkap.</p>
<p>
<b><code>filter[kota1_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kota1_id]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
Filter by kota 1.</p>
<p>
<b><code>filter[kota2_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kota2_id]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
Filter by kota 2.</p>
<p>
<b><code>filter[bidang_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[bidang_id]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
Filter by bidang id.</p>
<p>
<b><code>filter[universitas_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[universitas_id]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
Filter by universitas id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETuser-kolega" data-component="query"  hidden>
<br>
get data relasi (dataKota1,dataKota2,dataBidang,dataModerator,
dataUniversitas,dataJurusan,dataArtikel,dataEbook).</p>
</form>



