import { Component } from '@angular/core';
import { User } from '../user';
import { HttpClient, HttpErrorResponse, HttpParams } from '@angular/common/http';


@Component({
  selector: 'app-user-form',
  template: `
  <div>
  <h1>
  {{title}}
  </h1>
  <div>`,
  templateUrl: './user-form.component.html',
  styleUrls: ['./user-form.component.css']
})
export class UserFormComponent {
	hikers = ['Novice', 'Beginner', 'Intermediate', 'Advanced', 'Professional'];

	model = new User(' ', ' ', 0, this.hikers[2]);

	title = 'Connect:';

	submitted = false;

	onSubmit() {this.submitted = true; }

  responsedata = new User('', '', 0, '');


  constructor(private http: HttpClient) { }

  senddata(data) {
     console.log(data);

     let params = JSON.stringify(data);

     //this.http.get('http://localhost/cs4640s19/ngphp-get.php?str='+encodeURIComponent(params))
     //this.http.get<User>('http://localhost/a-4/connect-database.php?str='+params)
     this.http.post<User>('http://localhost/a-4/connect-database.php', data)
     .subscribe((data) => {
        console.log('Got data from backend', data);
        this.responsedata = data[0];
     }, (error) => {
        console.log('Error', error);
     })
  }
}




