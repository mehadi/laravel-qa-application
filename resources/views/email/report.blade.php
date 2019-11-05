Hey admin, in the past 48 hours, you received {{$count}}  answers to your text questions, that’s a lot to read. And list the last 5 in the email.
<br>
<ul>
    @foreach($last_five as $answer)

            <li>
                <h6 class="card-title"><b>Answer by: {{$answer->answer_by}}</b></h6>
                <p class="card-text">Answer: {{$answer->answer}}</p>
            </li>
        <hr>
    @endforeach
</ul>
<br>
Thank You,<br>
QA APP
