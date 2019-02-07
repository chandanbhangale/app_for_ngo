package com.example.chandan.ngoapp;

import android.content.Intent;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.CardView;
import android.view.View;

import maes.tech.intentanim.CustomIntent;

public class StoreDashboard extends BaseActivity {
    private CardView vieworders;
    private CardView confirmorders;
    private CardView regcomplaint;
    private CardView chatstore;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_podashboard);
        confirmorders= findViewById(R.id.confirmorders);
        vieworders = findViewById(R.id.vieworders);
        regcomplaint = findViewById(R.id.regcomplaint);
        chatstore = findViewById(R.id.chatstore);
        vieworders.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(StoreDashboard.this, ViewPOActivity.class);
                i.putExtra("flag",0);
                startActivity(i);
                CustomIntent.customType(StoreDashboard.this,"left-to-right");

            }
        });

        regcomplaint.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(StoreDashboard.this, ViewPOActivity.class);
                i.putExtra("flag",1);
                startActivity(i);
                CustomIntent.customType(StoreDashboard.this,"left-to-right");
            }
        });

        confirmorders.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(StoreDashboard.this, RegComp.class);
                i.putExtra("flag",1);
                startActivity(i);
                CustomIntent.customType(StoreDashboard.this,"left-to-right");
            }
        });

        chatstore.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent i = new Intent(StoreDashboard.this, ChatAct.class);
                i.putExtra("flag",1);
                startActivity(i);
                CustomIntent.customType(StoreDashboard.this,"left-to-right");
            }
        });

    }
}
