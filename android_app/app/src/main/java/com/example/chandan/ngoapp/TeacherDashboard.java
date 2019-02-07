package com.example.chandan.ngoapp;

import android.content.Intent;
import android.content.SharedPreferences;
import android.net.Uri;
import android.support.annotation.NonNull;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.CardView;
import android.support.v7.widget.RecyclerView;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;

import com.google.android.gms.auth.api.signin.GoogleSignIn;
import com.google.android.gms.auth.api.signin.GoogleSignInClient;
import com.google.android.gms.auth.api.signin.GoogleSignInOptions;
import com.google.android.gms.tasks.OnCompleteListener;
import com.google.android.gms.tasks.Task;
import com.google.firebase.auth.FirebaseAuth;
import com.google.zxing.integration.android.IntentIntegrator;

import maes.tech.intentanim.CustomIntent;

public class TeacherDashboard extends BaseActivity {

    private CardView entermarks;
    private CardView viewgraph;
    private CardView requestasset;
    private CardView registercomplaint;
    private CardView chatteacher;
    private Button btnBarcode;
    private IntentIntegrator qrScan;
    static MyDatabase db;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_teacher_dashboard);
        db = new MyDatabase(this);
        entermarks = findViewById(R.id.entermarks);
        viewgraph = findViewById(R.id.viewgraph);
        requestasset = findViewById(R.id.requestasset);
        registercomplaint = findViewById(R.id.registercomplaint);
        chatteacher = findViewById(R.id.chatteacher);

        entermarks.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(TeacherDashboard.this,AddMarks.class));
                CustomIntent.customType(TeacherDashboard.this,"left-to-right");

            }
        });

        viewgraph.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(TeacherDashboard.this, graphAct.class));
                CustomIntent.customType(TeacherDashboard.this,"left-to-right");
            }
        });

        requestasset.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(TeacherDashboard.this, RequestAsset.class));
                CustomIntent.customType(TeacherDashboard.this,"left-to-right");
            }
        });

        registercomplaint.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                startActivity(new Intent(TeacherDashboard.this, RegComp.class));
                CustomIntent.customType(TeacherDashboard.this,"left-to-right");
            }
        });

        chatteacher.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(Intent.ACTION_MAIN);
                intent.setClassName("com.example.chandan.demo30", "com.example.chandan.demo30.MainActivity");
                startActivity(intent);

               /* Intent intent = getPackageManager().getLaunchIntentForPackage("com.package.chandan");
               startActivity(intent);
*/




            }
        });
    }


//    @Override
//    public boolean onCreateOptionsMenu(Menu menu) {
//        getMenuInflater().inflate(R.menu.home, menu);
//        return true;
//    }
//
//    @Override
//    public boolean onOptionsItemSelected(MenuItem item) {
//        int id = item.getItemId();
//        if (id == R.id.tool_signout) {
//
//            FirebaseAuth.getInstance().signOut();
//            GoogleSignInOptions gso = new GoogleSignInOptions.Builder(GoogleSignInOptions.DEFAULT_SIGN_IN)
//                    .requestEmail()
//                    .build();
//            GoogleSignInClient mGoogleSignInClient = GoogleSignIn.getClient(this, gso);
//
//            mGoogleSignInClient.signOut()
//                    .addOnCompleteListener(this, new OnCompleteListener<Void>() {
//                        @Override
//                        public void onComplete(@NonNull Task<Void> task) {
//                            SharedPreferences pref = getApplicationContext().getSharedPreferences("MyPref", MODE_PRIVATE);
//                            SharedPreferences.Editor editor = pref.edit();
//                            editor.clear();
//                            editor.commit();
//                            Intent i = new Intent(getApplicationContext(), Signin.class);
//                            startActivity(i);
//                            finish();
//                        }
//                    });
//        }
//
//        return false;
//    }
}
