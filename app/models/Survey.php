<?php 

class Survey extends Model
{
    private $_answers = [],
            $_questions = [];

	public function __construct()
	{
		parent::__construct($dbname = GENDERDB);
	}
	
	public function lists()
	{
		return $this -> _db -> all('surveytrans');
	}

	public function setQuestions()
    {
        $sql = "SELECT DISTINCT a.question_id,b.questiondesc FROM survey_answer a 
                INNER JOIN refsurveyquestion b ON a.question_id = b.id
                ORDER BY a.question_id ASC";
        return $this -> _db -> query($sql) -> results();
    }

    public function setAnswers($question_id)
    {
        $sql = "SELECT a.answer AS answerdesc,count(row) AS total
                FROM survey_answer a 
                INNER JOIN refsurveyquestion b ON a.question_id = b.id
                WHERE a.question_id = ?
                GROUP BY a.question_id,a.answer ORDER BY a.question_id ";
        return $this -> _db -> query($sql,[$question_id]) -> results();
    }

    public function setSurveyForm()
    {      
        $this -> _questions[] = $this -> setQuestions();
        foreach ($this -> setQuestions() as $question) {
            // $this -> _questions[] = $question -> questiondesc;
            $this -> _answers[] = $this -> setAnswers($question -> question_id);
        }
    }

    public function answers()
    {   
        return $this -> _answers;
    }

    public function questions()
    {
        return $this -> _questions;
    }
}


?>