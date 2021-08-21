# FAQ


## List FAQ
untuk list FAQ dengan pagination




> Example request:

```javascript
const url = new URL(
    "http://localhost/faq"
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
            "id": 1,
            "pertanyaan": 1,
            "jawaban": 2,
            "created_by": 1,
            "updated_by": 1
        },
        {
            "id": 2,
            "pertanyaan": 2,
            "jawaban": 3,
            "created_by": 1,
            "updated_by": null
        }
    ],
    "links": {
        "first": "http:\/\/localhost:8000\/faq?page=1",
        "last": "http:\/\/localhost:8000\/faq?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http:\/\/localhost:8000\/faq",
        "per_page": 15,
        "to": 2,
        "total": 2
    }
}
```
<div id="execution-results-GETfaq" hidden>
    <blockquote>Received response<span id="execution-response-status-GETfaq"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETfaq"></code></pre>
</div>
<div id="execution-error-GETfaq" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETfaq"></code></pre>
</div>
<form id="form-GETfaq" data-method="GET" data-path="faq" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETfaq', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETfaq" onclick="tryItOut('GETfaq');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETfaq" onclick="cancelTryOut('GETfaq');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETfaq" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>faq</code></b>
</p>
</form>


## create FAQ
untuk create FAQ

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/faq/create"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pertanyaan": 6,
    "jawaban": 13
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
{
  "status": "success",
  "message": "data berhasil disimpan!",
  "data": {
       "id": null,
       "pertanyaan": "1",
       "jawaban": "1"
    }
  }
}
```
<div id="execution-results-POSTfaq-create" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTfaq-create"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTfaq-create"></code></pre>
</div>
<div id="execution-error-POSTfaq-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTfaq-create"></code></pre>
</div>
<form id="form-POSTfaq-create" data-method="POST" data-path="faq/create" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTfaq-create', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTfaq-create" onclick="tryItOut('POSTfaq-create');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTfaq-create" onclick="cancelTryOut('POSTfaq-create');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTfaq-create" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>faq/create</code></b>
</p>
<p>
<label id="auth-POSTfaq-create" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTfaq-create" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pertanyaan</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="pertanyaan" data-endpoint="POSTfaq-create" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>jawaban</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="jawaban" data-endpoint="POSTfaq-create" data-component="body" required  hidden>
<br>
</p>

</form>


## update FAQ
untuk update FAQ

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/faq/19/update"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "pertanyaan": 8,
    "jawaban": 5
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
{
       "status": "success",
      "message": "Kota berhasil diupdate",
      "data": {
          "id": 1,
          "pertanyaan": 1,
          "jawaban": "2"
      }
  }
}
```
<div id="execution-results-POSTfaq--id--update" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTfaq--id--update"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTfaq--id--update"></code></pre>
</div>
<div id="execution-error-POSTfaq--id--update" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTfaq--id--update"></code></pre>
</div>
<form id="form-POSTfaq--id--update" data-method="POST" data-path="faq/{id}/update" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTfaq--id--update', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTfaq--id--update" onclick="tryItOut('POSTfaq--id--update');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTfaq--id--update" onclick="cancelTryOut('POSTfaq--id--update');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTfaq--id--update" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>faq/{id}/update</code></b>
</p>
<p>
<label id="auth-POSTfaq--id--update" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTfaq--id--update" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTfaq--id--update" data-component="url" required  hidden>
<br>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>pertanyaan</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="pertanyaan" data-endpoint="POSTfaq--id--update" data-component="body"  hidden>
<br>
</p>
<p>
<b><code>jawaban</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="jawaban" data-endpoint="POSTfaq--id--update" data-component="body"  hidden>
<br>
</p>

</form>


## Delete FAQ
untuk delete FAQ

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/faq/12/delete"
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


<div id="execution-results-POSTfaq--id--delete" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTfaq--id--delete"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTfaq--id--delete"></code></pre>
</div>
<div id="execution-error-POSTfaq--id--delete" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTfaq--id--delete"></code></pre>
</div>
<form id="form-POSTfaq--id--delete" data-method="POST" data-path="faq/{id}/delete" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTfaq--id--delete', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTfaq--id--delete" onclick="tryItOut('POSTfaq--id--delete');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTfaq--id--delete" onclick="cancelTryOut('POSTfaq--id--delete');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTfaq--id--delete" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>faq/{id}/delete</code></b>
</p>
<p>
<label id="auth-POSTfaq--id--delete" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTfaq--id--delete" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTfaq--id--delete" data-component="url" required  hidden>
<br>
</p>
</form>



