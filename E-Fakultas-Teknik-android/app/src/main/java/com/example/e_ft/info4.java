package com.example.e_ft;

import android.os.Bundle;
import android.text.method.LinkMovementMethod;
import android.widget.TextView;

import androidx.appcompat.app.AppCompatActivity;

public class info4 extends AppCompatActivity {
    TextView textView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        getSupportActionBar().setDisplayShowHomeEnabled(true);
        getSupportActionBar().setTitle("Fakultas Teknik UTM");
        getSupportActionBar().setLogo(R.drawable.utm);
        getSupportActionBar().setDisplayUseLogoEnabled(true);
        super.onCreate(savedInstanceState);
        setContentView(R.layout.info4);

        TextView textView = findViewById(R.id.download);
        textView.setMovementMethod(LinkMovementMethod.getInstance());
    }

}