import "./main.css";
import 'alpinejs';
// import axios from 'axios';

// window.submitApplicationForm = function () {
//     return {
//         hasError: false,
//         formData: {
//             'name': '',
//             'email': '',
//             'message': '',
//             'resume': ''
//         },
//         resume_url: '',
//         errors: [],
//         fileUpload() {

//             var myHeaders = new Headers();
//             myHeaders.append("X-WP-Nonce", wpApiSettings.nonce);
//             // myHeaders.append("Cookie", "wordpress_logged_in_37d007a56d816107ce5b52c10342db37=ninja_admin%7C1602869369%7CKMeuRCTiD3Gv7z25GmGh6yx8TxPILYjkQkbPjskJyhs%7Ca55fdeaaf9cfc05757f26f2cd42cc26579e4ff6f84ae45faf98e6be46083e391");

//             var formdata = new FormData();
//             formdata.append("file", this.resume_url);
//             formdata.append("title", "test title");
//             formdata.append("caption", "test caption");

//             var requestOptions = {
//                 method: 'POST',
//                 headers: myHeaders,
//                 body: formdata,
//                 redirect: 'follow'
//             };

//             fetch("http://localhost:8080/wp-json/wp/v2/media/", requestOptions)
//                 .then(response => response.text())
//                 .then(result => console.log(result))
//                 .catch(error => console.log('error', error));
//         },
//         addEntry() {
//             console.log(this.formData);
//             var data = JSON.stringify({
//                 "1": this.formData.name,
//                 "2": this.formData.email,
//                 "3": this.formData.message,
//                 "4": this.resume_url,
//                 "form_id": 3,
//                 "is_starred": 0,
//                 "is_read": 1,
//                 "ip": "::1",
//                 "source_url": "http://localhost:8080/jobs/",
//                 "currency": "USD",
//                 "created_by": 1,
//                 "user_agent": "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0",
//                 "status": "active"
//             });

//             var config = {
//                 method: 'post',
//                 url: wpApiSettings.url,
//                 headers: {
//                     'Content-Type': 'application/json'
//                 },
//                 data: data
//             };

//             axios(config)
//                 .then(function (response) {
//                     console.log(JSON.stringify(response.data));
//                 })
//                 .catch(function (error) {
//                     console.log(error);
//                 });
//         },
//         submit() {
//             this.fileUpload();
//         }
//     }
// }