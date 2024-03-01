package com.example.e_ft;

import android.os.Bundle;
import android.text.method.LinkMovementMethod;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class info2 extends AppCompatActivity {
    TextView textView,textView1,textView2;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.info2);
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setTitle("Fakultas Teknik UTM");
        getSupportActionBar().setLogo(R.drawable.utm);
        getSupportActionBar().setDisplayUseLogoEnabled(true);

        TextView textView = findViewById(R.id.txtLink1);
        TextView textView1 = findViewById(R.id.txtLink2);
        TextView textView2 = findViewById(R.id.txtLink3);
        textView.setMovementMethod(LinkMovementMethod.getInstance());
        textView1.setMovementMethod(LinkMovementMethod.getInstance());
        textView2.setMovementMethod(LinkMovementMethod.getInstance());
    }
}