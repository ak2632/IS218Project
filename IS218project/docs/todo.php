<!DOCTYPE html>
<html lang="en">
    
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0"
        />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/todo.css" />
        <link rel="icon" href="img/icon.png" />
        <title>Todo-List</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> <a class="navbar-brand" href="index.html">Sign Up</a>
            <button class="navbar-toggler"
            type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"> <a class="nav-link" href="about.html">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
        <main role="main" class="container mt-5">
            <div class="row">
                <div class="col-8">
                    <div class="card p-3 ">
					
                        <h1 class="card-title">Todo</h1>
					<div class="todoContainer">	
						
						<h3> To-do Tasks</h1>
						
						<p>
						<label for="addTask"></label>
						<input id="addTask" type="text" placeholder="Add Task"><button>Add</button>
						</p>
						
						<div class="incompleted">
							<ol>
								<li class="editTask"><input type="checkbox"><label>#1</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
								<li class="editTask"><input type="checkbox"><label>#2</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
							</ol>
						</div>
						
						<h3>Completed</h3>
						<div class="completed">
							<ol>
								<li><input type="checkbox" checked><label>#3</label><input type="text"><button class="edit">Edit</button><button class="delete">Delete</button></li>
							</ol>
						</div>
					</div>
					
                    </div>
                </div>
                <div class="col-4">
                    <div class="card mb-5 shadow-sm bg-white rounded p-3">
                        <div class="card-body">
                            <h3><a class="nav-link" href="about.html">Log Out</h3>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- /.container -->