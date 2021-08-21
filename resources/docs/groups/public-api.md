# Public API


## List Universitas
data universitas tanpa paging




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-universitas"
);

let params = {
    "fields[universitas]": "ipsa",
    "filter[nama]": "autem",
    "sort": "non",
    "include": "sit",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
            "nama": "Universitas Gajah Mada"
        },
        {
            "id": 2,
            "nama": "ITENASx"
        },
        {
            "id": 3,
            "nama": "Universitas Padjadjaran"
        },
        {
            "id": 4,
            "nama": "IT"
        },
        {
            "id": 5,
            "nama": "ITB"
        },
    ]
}
```
<div id="execution-results-GETgeneral-all-universitas" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-universitas"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-universitas"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-universitas" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-universitas"></code></pre>
</div>
<form id="form-GETgeneral-all-universitas" data-method="GET" data-path="general/all-universitas" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-universitas', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-universitas" onclick="tryItOut('GETgeneral-all-universitas');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-universitas" onclick="cancelTryOut('GETgeneral-all-universitas');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-universitas" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-universitas</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[universitas]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[universitas]" data-endpoint="GETgeneral-all-universitas" data-component="query"  hidden>
<br>
select kolom 'nama'</p>
<p>
<b><code>filter[nama]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama]" data-endpoint="GETgeneral-all-universitas" data-component="query"  hidden>
<br>
Filter by nama universitas.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-universitas" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETgeneral-all-universitas" data-component="query"  hidden>
<br>
get data relasi (dataJurusan).</p>
</form>


## List Jurusan
data jurusan




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-jurusan"
);

let params = {
    "fields[jurusan]": "voluptas",
    "filter[universitas_id]": "16",
    "filter[nama]": "quisquam",
    "filter[kode]": "vel",
    "sort": "porro",
    "include": "omnis",
    "page[number]": "2",
    "page[size]": "20",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
            "kode": "KLI",
            "nama": null,
            "dataUniversitas": {
                "id": 1,
                "nama": "Universitas Gajah Mada"
            }
        },
        {
            "id": 2,
            "kode": "PIO",
            "nama": null,
            "dataUniversitas": {
                "id": 1,
                "nama": "Universitas Gajah Mada"
            }
        }
    ]
}
```
<div id="execution-results-GETgeneral-all-jurusan" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-jurusan"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-jurusan"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-jurusan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-jurusan"></code></pre>
</div>
<form id="form-GETgeneral-all-jurusan" data-method="GET" data-path="general/all-jurusan" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-jurusan', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-jurusan" onclick="tryItOut('GETgeneral-all-jurusan');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-jurusan" onclick="cancelTryOut('GETgeneral-all-jurusan');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-jurusan" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-jurusan</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[jurusan]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[jurusan]" data-endpoint="GETgeneral-all-jurusan" data-component="query"  hidden>
<br>
select kolom 'kode','universitas_id','nama'</p>
<p>
<b><code>filter[universitas_id]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="filter[universitas_id]" data-endpoint="GETgeneral-all-jurusan" data-component="query"  hidden>
<br>
Filter by universitas ID.</p>
<p>
<b><code>filter[nama]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama]" data-endpoint="GETgeneral-all-jurusan" data-component="query"  hidden>
<br>
Filter by nama jurusan.</p>
<p>
<b><code>filter[kode]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kode]" data-endpoint="GETgeneral-all-jurusan" data-component="query"  hidden>
<br>
Filter by kode jurusan.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-jurusan" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETgeneral-all-jurusan" data-component="query"  hidden>
<br>
get data relasi (dataUniversitas).</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-all-jurusan" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-all-jurusan" data-component="query"  hidden>
<br>
oprional</p>
</form>


## List Kota
data kota




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-kota"
);

let params = {
    "fields[kota]": "ut",
    "filter[nama_kota]": "facere",
    "filter[kode_kota]": "rerum",
    "filter[provinsi_id]": "a",
    "sort": "quo",
    "page[number]": "18",
    "page[size]": "9",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
            "nama_kota": "Kab. Simeulue",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Singkil",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Selatan",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Tenggara",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Timur",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Tengah",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Barat",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Besar",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Pidie",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Bireuen",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Utara",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Barat Daya",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Gayo Lues",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Tamiang",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Nagan Raya",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Aceh Jaya",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Bener Meriah",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Pidie Jaya",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Banda Aceh",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Sabang",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Langsa",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Lhokseumawe",
            "kode_kota": null
        },
        {
            "nama_kota": "Kota Subulussalam",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Nias",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Mandailing Natal",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Tapanuli Selatan",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Tapanuli Tengah",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Tapanuli Utara",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Toba Samosir",
            "kode_kota": null
        },
        {
            "nama_kota": "Kab. Labuhan Batu",
            "kode_kota": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/general\/all-kota?fields%5Bkota%5D=nama_kota%2Ckode_kota&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/general\/all-kota?fields%5Bkota%5D=nama_kota%2Ckode_kota&page%5Bnumber%5D=17",
        "prev": null,
        "next": "http:\/\/localhost:8000\/general\/all-kota?fields%5Bkota%5D=nama_kota%2Ckode_kota&page%5Bnumber%5D=2"
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 17,
        "path": "http:\/\/localhost:8000\/general\/all-kota",
        "per_page": 30,
        "to": 30,
        "total": 499
    }
}
```
<div id="execution-results-GETgeneral-all-kota" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-kota"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-kota"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-kota" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-kota"></code></pre>
</div>
<form id="form-GETgeneral-all-kota" data-method="GET" data-path="general/all-kota" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-kota', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-kota" onclick="tryItOut('GETgeneral-all-kota');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-kota" onclick="cancelTryOut('GETgeneral-all-kota');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-kota" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-kota</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[kota]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[kota]" data-endpoint="GETgeneral-all-kota" data-component="query"  hidden>
<br>
select kolom 'provinsi_id','nama_kota','kode_kota'</p>
<p>
<b><code>filter[nama_kota]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_kota]" data-endpoint="GETgeneral-all-kota" data-component="query"  hidden>
<br>
Filter by nama kota.</p>
<p>
<b><code>filter[kode_kota]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kode_kota]" data-endpoint="GETgeneral-all-kota" data-component="query"  hidden>
<br>
Filter by kode kota.</p>
<p>
<b><code>filter[provinsi_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[provinsi_id]" data-endpoint="GETgeneral-all-kota" data-component="query"  hidden>
<br>
Filter by provinsi id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-kota" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-all-kota" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-all-kota" data-component="query"  hidden>
<br>
oprional</p>
</form>


## List Provinsi
data provinsi




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-provinsi"
);

let params = {
    "fields[provinsi]": "omnis",
    "filter[nama_provinsi]": "non",
    "filter[kode_provinsi]": "est",
    "filter[negara_id]": "excepturi",
    "sort": "et",
    "page[number]": "10",
    "page[size]": "17",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
            "id": 11,
            "negaraId": null,
            "namaProvinsi": "ACEH",
            "kodeProvinsi": null
        },
        {
            "id": 12,
            "negaraId": null,
            "namaProvinsi": "SUMATERA UTARA",
            "kodeProvinsi": null
        },
        {
            "id": 13,
            "negaraId": null,
            "namaProvinsi": "SUMATERA BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 14,
            "negaraId": null,
            "namaProvinsi": "RIAU",
            "kodeProvinsi": null
        },
        {
            "id": 15,
            "negaraId": null,
            "namaProvinsi": "JAMBI",
            "kodeProvinsi": null
        },
        {
            "id": 16,
            "negaraId": null,
            "namaProvinsi": "SUMATERA SELATAN",
            "kodeProvinsi": null
        },
        {
            "id": 17,
            "negaraId": null,
            "namaProvinsi": "BENGKULU",
            "kodeProvinsi": null
        },
        {
            "id": 18,
            "negaraId": null,
            "namaProvinsi": "LAMPUNG",
            "kodeProvinsi": null
        },
        {
            "id": 19,
            "negaraId": null,
            "namaProvinsi": "KEPULAUAN BANGKA BELITUNG",
            "kodeProvinsi": null
        },
        {
            "id": 21,
            "negaraId": null,
            "namaProvinsi": "KEPULAUAN RIAU",
            "kodeProvinsi": null
        },
        {
            "id": 31,
            "negaraId": null,
            "namaProvinsi": "DKI JAKARTA",
            "kodeProvinsi": null
        },
        {
            "id": 32,
            "negaraId": null,
            "namaProvinsi": "JAWA BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 33,
            "negaraId": null,
            "namaProvinsi": "JAWA TENGAH",
            "kodeProvinsi": null
        },
        {
            "id": 34,
            "negaraId": null,
            "namaProvinsi": "DI YOGYAKARTA",
            "kodeProvinsi": null
        },
        {
            "id": 35,
            "negaraId": null,
            "namaProvinsi": "JAWA TIMUR",
            "kodeProvinsi": null
        },
        {
            "id": 36,
            "negaraId": null,
            "namaProvinsi": "BANTEN",
            "kodeProvinsi": null
        },
        {
            "id": 51,
            "negaraId": null,
            "namaProvinsi": "BALI",
            "kodeProvinsi": null
        },
        {
            "id": 52,
            "negaraId": null,
            "namaProvinsi": "NUSA TENGGARA BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 53,
            "negaraId": null,
            "namaProvinsi": "NUSA TENGGARA TIMUR",
            "kodeProvinsi": null
        },
        {
            "id": 61,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 62,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN TENGAH",
            "kodeProvinsi": null
        },
        {
            "id": 63,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN SELATAN",
            "kodeProvinsi": null
        },
        {
            "id": 64,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN TIMUR",
            "kodeProvinsi": null
        },
        {
            "id": 65,
            "negaraId": null,
            "namaProvinsi": "KALIMANTAN UTARA",
            "kodeProvinsi": null
        },
        {
            "id": 71,
            "negaraId": null,
            "namaProvinsi": "SULAWESI UTARA",
            "kodeProvinsi": null
        },
        {
            "id": 72,
            "negaraId": null,
            "namaProvinsi": "SULAWESI TENGAH",
            "kodeProvinsi": null
        },
        {
            "id": 73,
            "negaraId": null,
            "namaProvinsi": "SULAWESI SELATAN",
            "kodeProvinsi": null
        },
        {
            "id": 74,
            "negaraId": null,
            "namaProvinsi": "SULAWESI TENGGARA",
            "kodeProvinsi": null
        },
        {
            "id": 75,
            "negaraId": null,
            "namaProvinsi": "GORONTALO",
            "kodeProvinsi": null
        },
        {
            "id": 76,
            "negaraId": null,
            "namaProvinsi": "SULAWESI BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 81,
            "negaraId": null,
            "namaProvinsi": "MALUKU",
            "kodeProvinsi": null
        },
        {
            "id": 82,
            "negaraId": null,
            "namaProvinsi": "MALUKU UTARA",
            "kodeProvinsi": null
        },
        {
            "id": 91,
            "negaraId": null,
            "namaProvinsi": "PAPUA BARAT",
            "kodeProvinsi": null
        },
        {
            "id": 94,
            "negaraId": null,
            "namaProvinsi": "PAPUA",
            "kodeProvinsi": null
        }
    ]
}
```
<div id="execution-results-GETgeneral-all-provinsi" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-provinsi"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-provinsi"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-provinsi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-provinsi"></code></pre>
</div>
<form id="form-GETgeneral-all-provinsi" data-method="GET" data-path="general/all-provinsi" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-provinsi', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-provinsi" onclick="tryItOut('GETgeneral-all-provinsi');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-provinsi" onclick="cancelTryOut('GETgeneral-all-provinsi');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-provinsi" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-provinsi</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[provinsi]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[provinsi]" data-endpoint="GETgeneral-all-provinsi" data-component="query"  hidden>
<br>
select kolom 'negara_id','nama_provinsi','kode_provinsi'</p>
<p>
<b><code>filter[nama_provinsi]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_provinsi]" data-endpoint="GETgeneral-all-provinsi" data-component="query"  hidden>
<br>
Filter by nama provinsi.</p>
<p>
<b><code>filter[kode_provinsi]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kode_provinsi]" data-endpoint="GETgeneral-all-provinsi" data-component="query"  hidden>
<br>
Filter by kode provinsi.</p>
<p>
<b><code>filter[negara_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[negara_id]" data-endpoint="GETgeneral-all-provinsi" data-component="query"  hidden>
<br>
Filter by negara id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-provinsi" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-all-provinsi" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-all-provinsi" data-component="query"  hidden>
<br>
oprional</p>
</form>


## List Negara
data negara




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-negara"
);

let params = {
    "fields[negara]": "et",
    "filter[nama_negara]": "sit",
    "filter[kode_negara]": "aut",
    "sort": "quasi",
    "page[number]": "15",
    "page[size]": "20",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
            "nama_negara": "Indonesia"
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/general\/all-negara?fields%5Bnegara%5D=nama_negara&filter%5Bnama_negara%5D=&sort=&page%5Bnumber%5D=1",
        "last": "http:\/\/localhost:8000\/general\/all-negara?fields%5Bnegara%5D=nama_negara&filter%5Bnama_negara%5D=&sort=&page%5Bnumber%5D=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/general\/all-negara",
        "per_page": 30,
        "to": 1,
        "total": 1
    }
}
```
<div id="execution-results-GETgeneral-all-negara" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-negara"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-negara"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-negara" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-negara"></code></pre>
</div>
<form id="form-GETgeneral-all-negara" data-method="GET" data-path="general/all-negara" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-negara', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-negara" onclick="tryItOut('GETgeneral-all-negara');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-negara" onclick="cancelTryOut('GETgeneral-all-negara');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-negara" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-negara</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[negara]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[negara]" data-endpoint="GETgeneral-all-negara" data-component="query"  hidden>
<br>
select kolom 'nama_negara','kode_negara'</p>
<p>
<b><code>filter[nama_negara]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_negara]" data-endpoint="GETgeneral-all-negara" data-component="query"  hidden>
<br>
Filter by nama negara.</p>
<p>
<b><code>filter[kode_negara]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kode_negara]" data-endpoint="GETgeneral-all-negara" data-component="query"  hidden>
<br>
Filter by nama negara.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-negara" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-all-negara" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-all-negara" data-component="query"  hidden>
<br>
oprional</p>
</form>


## List Bidang
data bidang




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-bidang"
);

let params = {
    "fields[bidang]": "tenetur",
    "filter[nama]": "quis",
    "sort": "rerum",
    "page[number]": "10",
    "page[size]": "18",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
<div id="execution-results-GETgeneral-all-bidang" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-bidang"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-bidang"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-bidang" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-bidang"></code></pre>
</div>
<form id="form-GETgeneral-all-bidang" data-method="GET" data-path="general/all-bidang" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-bidang', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-bidang" onclick="tryItOut('GETgeneral-all-bidang');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-bidang" onclick="cancelTryOut('GETgeneral-all-bidang');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-bidang" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-bidang</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[bidang]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[bidang]" data-endpoint="GETgeneral-all-bidang" data-component="query"  hidden>
<br>
select kolom 'nama'</p>
<p>
<b><code>filter[nama]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama]" data-endpoint="GETgeneral-all-bidang" data-component="query"  hidden>
<br>
Filter by 'nama'</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-bidang" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-all-bidang" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-all-bidang" data-component="query"  hidden>
<br>
oprional</p>
</form>


## List Psikolog
untuk list psikolog




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-psikolog"
);

let params = {
    "fields[users]": "voluptas",
    "filter[nama_lengkap]": "ut",
    "filter[kota1_id]": "alias",
    "filter[kota2_id]": "sed",
    "filter[bidang_id]": "consequatur",
    "filter[universitas_id]": "voluptas",
    "sort": "officiis",
    "page[number]": "8",
    "page[size]": "16",
    "include": "fugit",
    "umur1": "5",
    "umur2": "2",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
<div id="execution-results-GETgeneral-all-psikolog" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-psikolog"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-psikolog"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-psikolog" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-psikolog"></code></pre>
</div>
<form id="form-GETgeneral-all-psikolog" data-method="GET" data-path="general/all-psikolog" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-psikolog', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-psikolog" onclick="tryItOut('GETgeneral-all-psikolog');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-psikolog" onclick="cancelTryOut('GETgeneral-all-psikolog');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-psikolog" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-psikolog</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[users]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[users]" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
select kolom 'kota1_id','kota2_id','bidang_id'</p>
<p>
<b><code>filter[nama_lengkap]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_lengkap]" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
Filter by nama lengkap.</p>
<p>
<b><code>filter[kota1_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kota1_id]" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
Filter by kota 1.</p>
<p>
<b><code>filter[kota2_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[kota2_id]" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
Filter by kota 2.</p>
<p>
<b><code>filter[bidang_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[bidang_id]" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
Filter by bidang id.</p>
<p>
<b><code>filter[universitas_id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[universitas_id]" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
Filter by universitas id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
get data relasi (dataKota1,dataKota2,dataBidang,dataModerator).</p>
<p>
<b><code>umur1</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="umur1" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>umur2</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="umur2" data-endpoint="GETgeneral-all-psikolog" data-component="query"  hidden>
<br>
optional</p>
</form>


## List Artikel
untuk artikel yang dishare




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-artikel"
);

let params = {
    "fields[artikel]": "velit",
    "filter[nama_kategori]": "neque",
    "sort": "sed",
    "page[number]": "4",
    "page[size]": "15",
    "include": "maiores",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
<div id="execution-results-GETgeneral-all-artikel" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-artikel"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-artikel"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-artikel" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-artikel"></code></pre>
</div>
<form id="form-GETgeneral-all-artikel" data-method="GET" data-path="general/all-artikel" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-artikel', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-artikel" onclick="tryItOut('GETgeneral-all-artikel');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-artikel" onclick="cancelTryOut('GETgeneral-all-artikel');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-artikel" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-artikel</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[artikel]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[artikel]" data-endpoint="GETgeneral-all-artikel" data-component="query"  hidden>
<br>
select kolom 'nama_kategori','judul','isi','image','user_id','views','visible'</p>
<p>
<b><code>filter[nama_kategori]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_kategori]" data-endpoint="GETgeneral-all-artikel" data-component="query"  hidden>
<br>
Filter by nama nama_kategori.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-artikel" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-all-artikel" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-all-artikel" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETgeneral-all-artikel" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
</form>


## List Ebook
untuk ebook yang dishare




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/all-ebook"
);

let params = {
    "fields[ebook]": "non",
    "filter[judul]": "accusamus",
    "sort": "omnis",
    "page[number]": "18",
    "page[size]": "3",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
<div id="execution-results-GETgeneral-all-ebook" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-all-ebook"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-all-ebook"></code></pre>
</div>
<div id="execution-error-GETgeneral-all-ebook" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-all-ebook"></code></pre>
</div>
<form id="form-GETgeneral-all-ebook" data-method="GET" data-path="general/all-ebook" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-all-ebook', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-all-ebook" onclick="tryItOut('GETgeneral-all-ebook');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-all-ebook" onclick="cancelTryOut('GETgeneral-all-ebook');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-all-ebook" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/all-ebook</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[ebook]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[ebook]" data-endpoint="GETgeneral-all-ebook" data-component="query"  hidden>
<br>
select kolom 'judul','author','synopsis','visible','bidang_id','file','image'</p>
<p>
<b><code>filter[judul]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[judul]" data-endpoint="GETgeneral-all-ebook" data-component="query"  hidden>
<br>
Filter by judul.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-all-ebook" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-all-ebook" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-all-ebook" data-component="query"  hidden>
<br>
oprional</p>
</form>


## View Artikel
untuk view artikel yang dishare




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/artikel/11/view"
);

let params = {
    "fields[artikel]": "distinctio",
    "filter[nama_kategori]": "explicabo",
    "sort": "pariatur",
    "page[number]": "1",
    "page[size]": "9",
    "include": "praesentium",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
<div id="execution-results-GETgeneral-artikel--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-artikel--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-artikel--id--view"></code></pre>
</div>
<div id="execution-error-GETgeneral-artikel--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-artikel--id--view"></code></pre>
</div>
<form id="form-GETgeneral-artikel--id--view" data-method="GET" data-path="general/artikel/{id}/view" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-artikel--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-artikel--id--view" onclick="tryItOut('GETgeneral-artikel--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-artikel--id--view" onclick="cancelTryOut('GETgeneral-artikel--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-artikel--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/artikel/{id}/view</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETgeneral-artikel--id--view" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[artikel]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[artikel]" data-endpoint="GETgeneral-artikel--id--view" data-component="query"  hidden>
<br>
select kolom 'nama_kategori','judul','isi','image','user_id','views','visible'</p>
<p>
<b><code>filter[nama_kategori]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[nama_kategori]" data-endpoint="GETgeneral-artikel--id--view" data-component="query"  hidden>
<br>
Filter by nama nama_kategori.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-artikel--id--view" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-artikel--id--view" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-artikel--id--view" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETgeneral-artikel--id--view" data-component="query"  hidden>
<br>
get data relasi (dataUser).</p>
</form>


## View Ebook
untuk view ebook yang dishare




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/ebook/15/view"
);

let params = {
    "fields[ebook]": "qui",
    "filter[judul]": "perferendis",
    "sort": "dolores",
    "page[number]": "3",
    "page[size]": "19",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
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
<div id="execution-results-GETgeneral-ebook--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-ebook--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-ebook--id--view"></code></pre>
</div>
<div id="execution-error-GETgeneral-ebook--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-ebook--id--view"></code></pre>
</div>
<form id="form-GETgeneral-ebook--id--view" data-method="GET" data-path="general/ebook/{id}/view" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-ebook--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-ebook--id--view" onclick="tryItOut('GETgeneral-ebook--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-ebook--id--view" onclick="cancelTryOut('GETgeneral-ebook--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-ebook--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/ebook/{id}/view</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETgeneral-ebook--id--view" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[ebook]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[ebook]" data-endpoint="GETgeneral-ebook--id--view" data-component="query"  hidden>
<br>
select kolom 'judul','author','synopsis','visible','bidang_id','file','image'</p>
<p>
<b><code>filter[judul]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[judul]" data-endpoint="GETgeneral-ebook--id--view" data-component="query"  hidden>
<br>
Filter by 'judul','author','synopsis','visible','bidang_id','file','image'</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-ebook--id--view" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-ebook--id--view" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-ebook--id--view" data-component="query"  hidden>
<br>
oprional</p>
</form>


## View General Psikolog




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/psikolog/16/view"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "SQLSTATE[42S02]: Base table or view not found: 1146 Table 'pampsi_db.users' doesn't exist (SQL: select * from `users` where `id` = 16)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
    "line": 671,
    "trace": [
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 631,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Connection.php",
            "line": 339,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2270,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2258,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2753,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Query\\Builder.php",
            "line": 2259,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php",
            "line": 548,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Database\\Eloquent\\Builder.php",
            "line": 532,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\app\\Http\\Controllers\\PsikologController.php",
            "line": 434,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "generalViewPsikolog",
            "class": "App\\Http\\Controllers\\PsikologController",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 386,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 352,
            "function": "callControllerCallable",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 326,
            "function": "callLumenController",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 279,
            "function": "callControllerAction",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 264,
            "function": "callActionOnArrayBasedRoute",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 234,
            "function": "handleFoundRoute",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 170,
            "function": "handleDispatcherResponse",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "function": "Laravel\\Lumen\\Concerns\\{closure}",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Routing\\Pipeline.php",
            "line": 48,
            "function": "call_user_func"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Laravel\\Lumen\\Routing\\{closure}",
            "class": "Laravel\\Lumen\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Routing\\Pipeline.php",
            "line": 30,
            "function": "call_user_func"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Laravel\\Lumen\\Routing\\{closure}",
            "class": "Laravel\\Lumen\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 423,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 172,
            "function": "sendThroughPipeline",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 92,
            "function": "dispatch",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 333,
            "function": "handle",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Console\\Kernel.php",
            "line": 116,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\artisan",
            "line": 35,
            "function": "handle",
            "class": "Laravel\\Lumen\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETgeneral-psikolog--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-psikolog--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-psikolog--id--view"></code></pre>
</div>
<div id="execution-error-GETgeneral-psikolog--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-psikolog--id--view"></code></pre>
</div>
<form id="form-GETgeneral-psikolog--id--view" data-method="GET" data-path="general/psikolog/{id}/view" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-psikolog--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-psikolog--id--view" onclick="tryItOut('GETgeneral-psikolog--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-psikolog--id--view" onclick="cancelTryOut('GETgeneral-psikolog--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-psikolog--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/psikolog/{id}/view</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETgeneral-psikolog--id--view" data-component="url" required  hidden>
<br>
</p>
</form>


## view psikolog Public
untuk view psikolog

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/general/user/3/view"
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
<div id="execution-results-GETgeneral-user--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-user--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-user--id--view"></code></pre>
</div>
<div id="execution-error-GETgeneral-user--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-user--id--view"></code></pre>
</div>
<form id="form-GETgeneral-user--id--view" data-method="GET" data-path="general/user/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-user--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-user--id--view" onclick="tryItOut('GETgeneral-user--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-user--id--view" onclick="cancelTryOut('GETgeneral-user--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-user--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/user/{id}/view</code></b>
</p>
<p>
<label id="auth-GETgeneral-user--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETgeneral-user--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETgeneral-user--id--view" data-component="url" required  hidden>
<br>
id user</p>
</form>


## view psikolog Public by username
untuk view psikolog by username

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/general/user/perspiciatis/view-username"
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
<div id="execution-results-GETgeneral-user--username--view-username" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-user--username--view-username"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-user--username--view-username"></code></pre>
</div>
<div id="execution-error-GETgeneral-user--username--view-username" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-user--username--view-username"></code></pre>
</div>
<form id="form-GETgeneral-user--username--view-username" data-method="GET" data-path="general/user/{username}/view-username" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-user--username--view-username', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-user--username--view-username" onclick="tryItOut('GETgeneral-user--username--view-username');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-user--username--view-username" onclick="cancelTryOut('GETgeneral-user--username--view-username');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-user--username--view-username" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/user/{username}/view-username</code></b>
</p>
<p>
<label id="auth-GETgeneral-user--username--view-username" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETgeneral-user--username--view-username" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>username</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="username" data-endpoint="GETgeneral-user--username--view-username" data-component="url" required  hidden>
<br>
</p>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETgeneral-user--username--view-username" data-component="url" required  hidden>
<br>
username user</p>
</form>


## List Survey Public




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/survey"
);

let params = {
    "fields[survey]": "et",
    "filter[id]": "ut",
    "sort": "repellendus",
    "page[number]": "1",
    "page[size]": "15",
    "include": "dolor",
};
Object.keys(params)
    .forEach(key => url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (400):

```json
{
    "message": "Requested sort(s) `repellendus` is not allowed. Allowed sort(s) are `id, user_id, kategori, close, judul, keterangan, file_panduan`.",
    "exception": "Spatie\\QueryBuilder\\Exceptions\\InvalidSortQuery",
    "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\spatie\\laravel-query-builder\\src\\Exceptions\\InvalidSortQuery.php",
    "line": 30,
    "trace": [
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\spatie\\laravel-query-builder\\src\\Concerns\\SortsQuery.php",
            "line": 113,
            "function": "sortsNotAllowed",
            "class": "Spatie\\QueryBuilder\\Exceptions\\InvalidSortQuery",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\spatie\\laravel-query-builder\\src\\Concerns\\SortsQuery.php",
            "line": 31,
            "function": "ensureAllSortsExist",
            "class": "Spatie\\QueryBuilder\\QueryBuilder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\app\\Http\\Controllers\\SurveyController.php",
            "line": 81,
            "function": "allowedSorts",
            "class": "Spatie\\QueryBuilder\\QueryBuilder",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "listSurveyPublic",
            "class": "App\\Http\\Controllers\\SurveyController",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 386,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 352,
            "function": "callControllerCallable",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 326,
            "function": "callLumenController",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 279,
            "function": "callControllerAction",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 264,
            "function": "callActionOnArrayBasedRoute",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 166,
            "function": "handleFoundRoute",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "function": "Laravel\\Lumen\\Concerns\\{closure}",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Routing\\Pipeline.php",
            "line": 48,
            "function": "call_user_func"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\fruitcake\\laravel-cors\\src\\HandleCors.php",
            "line": 57,
            "function": "Laravel\\Lumen\\Routing\\{closure}",
            "class": "Laravel\\Lumen\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Routing\\Pipeline.php",
            "line": 30,
            "function": "call_user_func"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 103,
            "function": "Laravel\\Lumen\\Routing\\{closure}",
            "class": "Laravel\\Lumen\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 423,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 172,
            "function": "sendThroughPipeline",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Concerns\\RoutesRequests.php",
            "line": 92,
            "function": "dispatch",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 333,
            "function": "handle",
            "class": "Laravel\\Lumen\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Strategies\\Responses\\ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Extracting\\Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\knuckleswtf\\scribe\\src\\Commands\\GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Util.php",
            "line": 37,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 596,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 134,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 256,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 971,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 290,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\symfony\\console\\Application.php",
            "line": 166,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 93,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\vendor\\laravel\\lumen-framework\\src\\Console\\Kernel.php",
            "line": 116,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\SEMESTER 6\\Proyek Akhir\\Backend PAMPsi\\pam-backend\\artisan",
            "line": 35,
            "function": "handle",
            "class": "Laravel\\Lumen\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETgeneral-survey" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-survey"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-survey"></code></pre>
</div>
<div id="execution-error-GETgeneral-survey" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-survey"></code></pre>
</div>
<form id="form-GETgeneral-survey" data-method="GET" data-path="general/survey" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-survey', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-survey" onclick="tryItOut('GETgeneral-survey');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-survey" onclick="cancelTryOut('GETgeneral-survey');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-survey" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/survey</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>fields[survey]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="fields[survey]" data-endpoint="GETgeneral-survey" data-component="query"  hidden>
<br>
select kolom 'id','user_id','kategori','close'
,'judul','keterangan','file_panduan'</p>
<p>
<b><code>filter[id]</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="filter[id]" data-endpoint="GETgeneral-survey" data-component="query"  hidden>
<br>
Filter by id.</p>
<p>
<b><code>sort</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="sort" data-endpoint="GETgeneral-survey" data-component="query"  hidden>
<br>
sort data berdasarkan kolom. tambah tanda (-) untuk DESC.</p>
<p>
<b><code>page[number]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[number]" data-endpoint="GETgeneral-survey" data-component="query"  hidden>
<br>
optional</p>
<p>
<b><code>page[size]</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page[size]" data-endpoint="GETgeneral-survey" data-component="query"  hidden>
<br>
oprional</p>
<p>
<b><code>include</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="include" data-endpoint="GETgeneral-survey" data-component="query"  hidden>
<br>
get data relasi (dataUser,dataSoal,dataJawaban).</p>
</form>


## Survey soal jawaban create
untuk create jawaban pada soal




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/soal-jawaban/delectus/create"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "nama": "repudiandae",
    "email": "occaecati",
    "jawaban": "voluptatem"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTgeneral-soal-jawaban--id--create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTgeneral-soal-jawaban--id--create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTgeneral-soal-jawaban--id--create"></code></pre>
</div>
<div id="execution-error-POSTgeneral-soal-jawaban--id--create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTgeneral-soal-jawaban--id--create"></code></pre>
</div>
<form id="form-POSTgeneral-soal-jawaban--id--create" data-method="POST" data-path="general/soal-jawaban/{id}/create" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTgeneral-soal-jawaban--id--create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTgeneral-soal-jawaban--id--create" onclick="tryItOut('POSTgeneral-soal-jawaban--id--create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTgeneral-soal-jawaban--id--create" onclick="cancelTryOut('POSTgeneral-soal-jawaban--id--create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTgeneral-soal-jawaban--id--create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>general/soal-jawaban/{id}/create</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="POSTgeneral-soal-jawaban--id--create" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>nama</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="nama" data-endpoint="POSTgeneral-soal-jawaban--id--create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTgeneral-soal-jawaban--id--create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>jawaban</code></b>&nbsp;&nbsp;<small>array</small>  &nbsp;
<input type="text" name="jawaban" data-endpoint="POSTgeneral-soal-jawaban--id--create" data-component="body" required  hidden>
<br>
</p>

</form>


## List Rekomendasi Public
untuk list rekomendasi




> Example request:

```javascript
const url = new URL(
    "http://localhost/general/rekomendasi/19/list"
);

let headers = {
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
            "penerimaRekomendasi": null,
            "pemberiRekomendasi": null,
            "catatan": null
        }
    ]
}
```
<div id="execution-results-GETgeneral-rekomendasi--id--list" hidden>
    <blockquote>Received response<span id="execution-response-status-GETgeneral-rekomendasi--id--list"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETgeneral-rekomendasi--id--list"></code></pre>
</div>
<div id="execution-error-GETgeneral-rekomendasi--id--list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETgeneral-rekomendasi--id--list"></code></pre>
</div>
<form id="form-GETgeneral-rekomendasi--id--list" data-method="GET" data-path="general/rekomendasi/{id}/list" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETgeneral-rekomendasi--id--list', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETgeneral-rekomendasi--id--list" onclick="tryItOut('GETgeneral-rekomendasi--id--list');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETgeneral-rekomendasi--id--list" onclick="cancelTryOut('GETgeneral-rekomendasi--id--list');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETgeneral-rekomendasi--id--list" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>general/rekomendasi/{id}/list</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETgeneral-rekomendasi--id--list" data-component="url" required  hidden>
<br>
</p>
</form>



