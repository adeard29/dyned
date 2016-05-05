import java.io.*;
import java.util.*;

public class sort_function {
    public static void main(String[] args) throws Exception {
        BufferedReader reader = new BufferedReader(new FileReader("sort.txt"));
        Map<String, String> map=new TreeMap<String, String>();
        String line="";
        while((line=reader.readLine())!=null){
                map.put(getField(line),line);
        }
        reader.close();
        BufferedWriter writer = new BufferedWriter(new FileWriter("fileToWrite1.txt"));
        for(String val : map.values()){
                writer.write(val);      
                writer.newLine();
        }
        writer.close();
    }

    private static String getField(String line) {
        return line.split(" ")[0];//extract value you want to sort on
    }
}