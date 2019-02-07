package com.example.chandan.ngoapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.CardView;
import android.view.View;

import maes.tech.intentanim.CustomIntent;

public class PrincDashboard extends BaseActivity {

    private CardView viewPerformance;
    private CardView addTeacher;
    private CardView viewRequests;
    private CardView viewComplaint;
    private CardView chatPrinci;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_princ_dashboard);

        viewPerformance = findViewById(R.id.viewperformance);
        addTeacher = findViewById(R.id.addteacher);
        viewRequests = findViewById(R.id.viewrequests);
        viewComplaint = findViewById(R.id.viewcomplaint);
        chatPrinci = findViewById(R.id.chatprinci);


        viewPerformance.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(PrincDashboard.this, PrincViewActivity.class);
                i.putExtra("branch", "CMPN");
                startActivity(i);
                CustomIntent.customType(PrincDashboard.this,"left-to-right");
            }
        });

        addTeacher.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(PrincDashboard.this, PrincViewActivity.class);
                i.putExtra("branch", "IT");
                startActivity(i);
                CustomIntent.customType(PrincDashboard.this,"left-to-right");
            }
        });

        viewRequests.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(PrincDashboard.this, PrincViewActivity.class);
                i.putExtra("branch", "EXTC");
                startActivity(i);
                CustomIntent.customType(PrincDashboard.this,"left-to-right");
            }
        });

        viewComplaint.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(PrincDashboard.this, PrincViewActivity.class);
                i.putExtra("branch", "ETRX");
                startActivity(i);
                CustomIntent.customType(PrincDashboard.this,"left-to-right");
            }
        });

        chatPrinci.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Intent.ACTION_MAIN);
                intent.setClassName("com.example.chandan.chatroom", "com.example.chandan.chatroom.ChatAct");
                startActivity(intent);
            }
        });
    }

}
