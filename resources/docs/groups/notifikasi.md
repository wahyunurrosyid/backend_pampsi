# Notifikasi


## List Notifikasi
untuk list notifikasi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/notifikasi"
);

let headers = {
    "Authorization": "Bearer {YOUR_AUTH_KEY}",
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "page": 5,
    "per_page": 15
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTuser-notifikasi" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-notifikasi"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-notifikasi"></code></pre>
</div>
<div id="execution-error-POSTuser-notifikasi" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-notifikasi"></code></pre>
</div>
<form id="form-POSTuser-notifikasi" data-method="POST" data-path="user/notifikasi" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-notifikasi', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-notifikasi" onclick="tryItOut('POSTuser-notifikasi');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-notifikasi" onclick="cancelTryOut('POSTuser-notifikasi');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-notifikasi" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/notifikasi</code></b>
</p>
<p>
<label id="auth-POSTuser-notifikasi" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-notifikasi" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="page" data-endpoint="POSTuser-notifikasi" data-component="body" required  hidden>
<br>
</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="per_page" data-endpoint="POSTuser-notifikasi" data-component="body" required  hidden>
<br>
</p>

</form>


## View Notifikasi
saat di view maka notifikasi akan hilang di list notifikasi

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/notifikasi/vel/view"
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
<div id="execution-results-GETuser-notifikasi--id--view" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-notifikasi--id--view"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-notifikasi--id--view"></code></pre>
</div>
<div id="execution-error-GETuser-notifikasi--id--view" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-notifikasi--id--view"></code></pre>
</div>
<form id="form-GETuser-notifikasi--id--view" data-method="GET" data-path="user/notifikasi/{id}/view" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-notifikasi--id--view', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-notifikasi--id--view" onclick="tryItOut('GETuser-notifikasi--id--view');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-notifikasi--id--view" onclick="cancelTryOut('GETuser-notifikasi--id--view');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-notifikasi--id--view" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/notifikasi/{id}/view</code></b>
</p>
<p>
<label id="auth-GETuser-notifikasi--id--view" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-notifikasi--id--view" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="id" data-endpoint="GETuser-notifikasi--id--view" data-component="url" required  hidden>
<br>
id notifikasi</p>
</form>



