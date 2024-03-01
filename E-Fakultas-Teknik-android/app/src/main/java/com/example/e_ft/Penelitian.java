package com.example.e_ft;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;
import android.widget.Toast;

import androidx.annotation.NonNull;
import androidx.annotation.Nullable;
import androidx.fragment.app.Fragment;

public class Penelitian extends Fragment {
    TextView textView;
    Button button1, button2;
    @Nullable
    @Override
    public View onCreateView(@NonNull LayoutInflater inflater, @Nullable ViewGroup container,
                             @Nullable Bundle savedInstanceState) {
        View view = inflater.inflate(R.layout.fragment_penelitian, container, false);

        button1=(Button)view.findViewById(R.id.button1);
        button2=(Button)view.findViewById(R.id.button2);

        button1.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/IOP%20Publishing%20Dosen%20FT%20UTM.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });
        button2.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String url="http://teknik.trunojoyo.ac.id/penelitiandosen/IOP%20Publishing%20Dosen%20FT%20UTM.pdf";
                Intent bukabrowser = new Intent(Intent.ACTION_VIEW);
                bukabrowser.setData(Uri.parse(url));
                startActivity(bukabrowser);
            }
        });

        textView=(TextView)view.findViewById(R.id.textview7);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian4.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview8);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian5.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview9);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian6.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview10);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian7.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview11);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian8.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview12);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian9.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview13);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian10.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview14);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian11.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview15);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian12.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });

        textView=(TextView)view.findViewById(R.id.textview16);
        textView.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                Intent intent=new Intent(v.getContext(),Penelitian13.class);
                startActivity(intent);

                Toast.makeText(v.getContext(),"berhasil" , Toast.LENGTH_LONG).show();
            }
        });
        return view;
    }
}
