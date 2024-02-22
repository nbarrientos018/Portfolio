
import java.util.Scanner;

public class arrayNumber {

	public static void main(String[] args) {
		Scanner sc = new Scanner(System.in);
		int[] arrayNum;
	
		int size, totalSame = 0, j = 0, index, sameVal=0;
		boolean repeat = true;

		while (repeat) {
			
			
			System.out.print("How many numbers are you gonna input?: ");
			size = sc.nextInt();

			arrayNum = new int[size];
		
			for (index = 0; index < arrayNum.length; index++) {
				arrayNum[index] = sc.nextInt();
				

				for (j = 0; j < arrayNum.length; j++) {
					if (arrayNum[index] == arrayNum[j]) {
						totalSame++;
						sameVal = arrayNum[index];
						
					}
				}	
				
			}
			
			
			////nah
			for (index = 0; index < arrayNum.length; index++) {
				for (j = 0; j < arrayNum.length; j++) {
					if(arrayNum[index] == arrayNum[j]) {
						System.out.println("These indices has element: " + " index " + "[ " + index + " ] = " + arrayNum[index]);
					}
				}
			}
			
			
			
			System.out.println("There are " + (totalSame) + " same numbers!");
			
			
			for(index = 0; index < totalSame; index++) {
				if(arrayNum[index] == sameVal) {
					System.out.println("These indices has element: " + " index " + "[ " + index + " ] = " + arrayNum[index]);
				}
			}
			

			// rep
			System.out.println("Do you want to do it all over again? (Y/N)");
			char ans = sc.next().charAt(0);
			if (ans == 'Y' || ans == 'y') {
				System.out.println("Restart!");
				totalSame = 0;
			} else if (ans == 'n' || ans == 'N') {
				System.out.println("Good bye!");
				repeat = false;

			}
		}
	}

}
