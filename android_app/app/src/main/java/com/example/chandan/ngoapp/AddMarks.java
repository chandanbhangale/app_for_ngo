package com.example.chandan.ngoapp;


import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class AddMarks extends AppCompatActivity {

    EditText etRollNo, etMarks;
    Button btnAddMarks;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_add_marks);

        etRollNo = (EditText)findViewById(R.id.etRollNo);
        etMarks = (EditText)findViewById(R.id.etMarks);
        btnAddMarks = (Button) findViewById(R.id.btnAddMarks);

        btnAddMarks.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String rno = etRollNo.getText().toString();
                String marks = etMarks.getText().toString();

                if(rno.length() == 0)
                {
                    etRollNo.setError("Please fill Roll No");
                    etRollNo.requestFocus();
                    return;
                }

                if(marks.length() == 0)
                {
                    etMarks.setError("Please fill Name");
                    etMarks.requestFocus();
                    return;
                }

                TeacherDashboard.db.addStudent(Integer.parseInt(rno), Integer.parseInt(marks));

                etRollNo.setText("");
                etMarks.setText("");
                etRollNo.requestFocus();
            }
        });
    }
}

