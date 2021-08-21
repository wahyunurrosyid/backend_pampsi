# Friendship / connection


## List friends
data user yang sudah terkoneksi sebagai teman

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/friends"
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
  [
     id: 1,
     username: "john",
     nama_lengkap: null,
     member_id: null,
     pivot: []
  ]
}
```
<div id="execution-results-GETuser-friends" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-friends"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-friends"></code></pre>
</div>
<div id="execution-error-GETuser-friends" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-friends"></code></pre>
</div>
<form id="form-GETuser-friends" data-method="GET" data-path="user/friends" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-friends', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-friends" onclick="tryItOut('GETuser-friends');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-friends" onclick="cancelTryOut('GETuser-friends');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-friends" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/friends</code></b>
</p>
<p>
<label id="auth-GETuser-friends" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-friends" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETuser-friends" data-component="query"  hidden>
<br>
nomor halaman.</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETuser-friends" data-component="query"  hidden>
<br>
jumlah per halaman.</p>
<p>
<b><code>cari</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cari" data-endpoint="GETuser-friends" data-component="query"  hidden>
<br>
cari username.</p>
</form>


## List Blocked friends
data user yang yang diblock oleh user login

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/blocked-friends"
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
  [
     id: 1,
     username: "john",
     nama_lengkap: null,
     member_id: null,
     pivot: []
  ]
}
```
<div id="execution-results-GETuser-blocked-friends" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-blocked-friends"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-blocked-friends"></code></pre>
</div>
<div id="execution-error-GETuser-blocked-friends" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-blocked-friends"></code></pre>
</div>
<form id="form-GETuser-blocked-friends" data-method="GET" data-path="user/blocked-friends" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-blocked-friends', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-blocked-friends" onclick="tryItOut('GETuser-blocked-friends');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-blocked-friends" onclick="cancelTryOut('GETuser-blocked-friends');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-blocked-friends" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/blocked-friends</code></b>
</p>
<p>
<label id="auth-GETuser-blocked-friends" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-blocked-friends" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETuser-blocked-friends" data-component="query"  hidden>
<br>
nomor halaman.</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETuser-blocked-friends" data-component="query"  hidden>
<br>
jumlah per halaman.</p>
<p>
<b><code>cari</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cari" data-endpoint="GETuser-blocked-friends" data-component="query"  hidden>
<br>
cari username.</p>
</form>


## List friends request
data permintaan pertemanan dari user lain

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/friends-request"
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
  [
     id: 1,
     username: "john",
     nama_lengkap: null,
     member_id: null,
     pivot: []
  ]
}
```
<div id="execution-results-GETuser-friends-request" hidden>
    <blockquote>Received response<span id="execution-response-status-GETuser-friends-request"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETuser-friends-request"></code></pre>
</div>
<div id="execution-error-GETuser-friends-request" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETuser-friends-request"></code></pre>
</div>
<form id="form-GETuser-friends-request" data-method="GET" data-path="user/friends-request" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETuser-friends-request', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETuser-friends-request" onclick="tryItOut('GETuser-friends-request');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETuser-friends-request" onclick="cancelTryOut('GETuser-friends-request');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETuser-friends-request" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>user/friends-request</code></b>
</p>
<p>
<label id="auth-GETuser-friends-request" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETuser-friends-request" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Query Parameters</b></h4>
<p>
<b><code>page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="page" data-endpoint="GETuser-friends-request" data-component="query"  hidden>
<br>
nomor halaman.</p>
<p>
<b><code>per_page</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="per_page" data-endpoint="GETuser-friends-request" data-component="query"  hidden>
<br>
jumlah per halaman.</p>
<p>
<b><code>cari</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="cari" data-endpoint="GETuser-friends-request" data-component="query"  hidden>
<br>
cari username.</p>
</form>


## Kirim friends request
kirim permintaan pertemanan ke user lain

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/friends-request"
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
  [
     status: "success",
     message: "silahkan tunggu",
     data: []
  ]
}
```
<div id="execution-results-POSTuser-friends-request" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-friends-request"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-friends-request"></code></pre>
</div>
<div id="execution-error-POSTuser-friends-request" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-friends-request"></code></pre>
</div>
<form id="form-POSTuser-friends-request" data-method="POST" data-path="user/friends-request" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-friends-request', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-friends-request" onclick="tryItOut('POSTuser-friends-request');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-friends-request" onclick="cancelTryOut('POSTuser-friends-request');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-friends-request" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/friends-request</code></b>
</p>
<p>
<label id="auth-POSTuser-friends-request" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-friends-request" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>target_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="target_id" data-endpoint="POSTuser-friends-request" data-component="body"  hidden>
<br>
id user target.</p>

</form>


## Approval friends request
menyetujui permintaan pertemanan ke user lain

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/friends-request-approve"
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
  [
     status: "success",
     message: "Anda telah menyetujui permintaan pertemanan",
  ]
}
```
<div id="execution-results-POSTuser-friends-request-approve" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-friends-request-approve"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-friends-request-approve"></code></pre>
</div>
<div id="execution-error-POSTuser-friends-request-approve" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-friends-request-approve"></code></pre>
</div>
<form id="form-POSTuser-friends-request-approve" data-method="POST" data-path="user/friends-request-approve" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-friends-request-approve', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-friends-request-approve" onclick="tryItOut('POSTuser-friends-request-approve');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-friends-request-approve" onclick="cancelTryOut('POSTuser-friends-request-approve');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-friends-request-approve" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/friends-request-approve</code></b>
</p>
<p>
<label id="auth-POSTuser-friends-request-approve" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-friends-request-approve" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>request_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="request_id" data-endpoint="POSTuser-friends-request-approve" data-component="body"  hidden>
<br>
id request.</p>

</form>


## Reject friends request
menolak permintaan pertemanan ke user lain

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/friends-request-reject"
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
  [
     status: "success",
     message: "Anda telah menolak permintaan pertemanan",
  ]
}
```
<div id="execution-results-POSTuser-friends-request-reject" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-friends-request-reject"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-friends-request-reject"></code></pre>
</div>
<div id="execution-error-POSTuser-friends-request-reject" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-friends-request-reject"></code></pre>
</div>
<form id="form-POSTuser-friends-request-reject" data-method="POST" data-path="user/friends-request-reject" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-friends-request-reject', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-friends-request-reject" onclick="tryItOut('POSTuser-friends-request-reject');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-friends-request-reject" onclick="cancelTryOut('POSTuser-friends-request-reject');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-friends-request-reject" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/friends-request-reject</code></b>
</p>
<p>
<label id="auth-POSTuser-friends-request-reject" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-friends-request-reject" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>request_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="request_id" data-endpoint="POSTuser-friends-request-reject" data-component="body"  hidden>
<br>
id request.</p>

</form>


## Block user
block user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/friend-block"
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
  [
     status: "success",
     message: "Anda telah mem-block user",
  ]
}
```
<div id="execution-results-POSTuser-friend-block" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-friend-block"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-friend-block"></code></pre>
</div>
<div id="execution-error-POSTuser-friend-block" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-friend-block"></code></pre>
</div>
<form id="form-POSTuser-friend-block" data-method="POST" data-path="user/friend-block" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-friend-block', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-friend-block" onclick="tryItOut('POSTuser-friend-block');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-friend-block" onclick="cancelTryOut('POSTuser-friend-block');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-friend-block" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/friend-block</code></b>
</p>
<p>
<label id="auth-POSTuser-friend-block" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-friend-block" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>target_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="target_id" data-endpoint="POSTuser-friend-block" data-component="body"  hidden>
<br>
id target.</p>

</form>


## UnBlock user
unblock user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/friend-unblock"
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
  [
     status: "success",
     message: "Anda telah meng-unblock user",
  ]
}
```
<div id="execution-results-POSTuser-friend-unblock" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-friend-unblock"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-friend-unblock"></code></pre>
</div>
<div id="execution-error-POSTuser-friend-unblock" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-friend-unblock"></code></pre>
</div>
<form id="form-POSTuser-friend-unblock" data-method="POST" data-path="user/friend-unblock" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-friend-unblock', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-friend-unblock" onclick="tryItOut('POSTuser-friend-unblock');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-friend-unblock" onclick="cancelTryOut('POSTuser-friend-unblock');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-friend-unblock" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/friend-unblock</code></b>
</p>
<p>
<label id="auth-POSTuser-friend-unblock" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-friend-unblock" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>target_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="target_id" data-endpoint="POSTuser-friend-unblock" data-component="body"  hidden>
<br>
id target.</p>

</form>


## Unfriend user
unfriend user

<small class="badge badge-darkred">requires authentication</small>



> Example request:

```javascript
const url = new URL(
    "http://localhost/user/unfriend"
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
  [
     status: "success",
     message: "user unfriend!",
  ]
}
```
<div id="execution-results-POSTuser-unfriend" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTuser-unfriend"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTuser-unfriend"></code></pre>
</div>
<div id="execution-error-POSTuser-unfriend" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTuser-unfriend"></code></pre>
</div>
<form id="form-POSTuser-unfriend" data-method="POST" data-path="user/unfriend" data-authed="1" data-hasfiles="0" data-headers='{"Authorization":"Bearer {YOUR_AUTH_KEY}","Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTuser-unfriend', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTuser-unfriend" onclick="tryItOut('POSTuser-unfriend');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTuser-unfriend" onclick="cancelTryOut('POSTuser-unfriend');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTuser-unfriend" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>user/unfriend</code></b>
</p>
<p>
<label id="auth-POSTuser-unfriend" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTuser-unfriend" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>target_id</code></b>&nbsp;&nbsp;<small>integer</small>     <i>optional</i> &nbsp;
<input type="number" name="target_id" data-endpoint="POSTuser-unfriend" data-component="body"  hidden>
<br>
id target.</p>

</form>



