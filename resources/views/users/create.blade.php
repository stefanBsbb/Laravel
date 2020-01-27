

    <!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
      <title>Create User | Product Store</title>
      <!-- styling etc. -->
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <form method="POST" action="/users">
                    <h1> Create User</h1>
                    <div class="form-input">
                        <label>Name</label> <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-input">
                        <label>Email</label> <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-input">
                        <label>Password</label> <input type="password" class="form-control" id="password" name="password">
                    </div>

        <div class="form-group">
             <button type="submit">Submit</button>
        </div>
                </form>
            </div>
        </div>
    </body>
    </html>

 

