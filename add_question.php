<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Online Test</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
        
              <div class="collapse navbar-collapse" id="navbarsExample03">
                <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.html">Take exam</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="add_question.php">Add Questions</a>
                  </li>
<!--
                  <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
                <form role="search">
                  <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </form>
            -->
              </div>
            </div>
          </nav>
<div class="container">
<h2><u>Add Question</u></h2>
<form action="add_question_process.php" method="POST">
<label>Question:</label><br />
<input type="text" name="question" class="form-control" placeholder="Enter the question" required />
<br />

<label>Question Type:</label><br />
<select name="qtype" class="form-control">
<option value="text">Text</option>
<option value="image">Image</option>
</select>
<br />

<label>Answer 1:</label><br />
<input type="text" class="form-control" name="ans_one" placeholder="Enter the first option" required />
<br />

<label>Answer 2:</label><br />
<input type="text" class="form-control" name="ans_two" placeholder="Enter the second option" required />
<br />

<label>Answer 3:</label><br />
<input type="text" class="form-control" name="ans_three" placeholder="Enter the third option" required />
<br />

<label>Answer 4:</label><br />
<input type="text" class="form-control" name="ans_four" placeholder="Enter the fourth option" required />
<br />

<label>Correct Answer:</label><br />
<select name="correct_answer" class="form-control">
<option value="a">Answer 1</option>
<option value="b">Answer 2</option>
<option value="c">Answer 3</option>
<option value="d">Answer 4</option>
</select>
<br />
<button type="submit" class="btn btn-success" name="submit">Add Question</button>
</form>
</div>